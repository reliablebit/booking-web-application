<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Listing;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

// Updated imports for BaconQrCode
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Writer;

class BookingController extends Controller
{
    // Create Booking (seat lock + QR)
    public function store(Request $request)
    {
        $request->validate([
            'listing_id' => 'required|exists:listings,id',
            'seat_number' => 'nullable|string'
        ]);

        return DB::transaction(function () use ($request) {
            $listing = Listing::lockForUpdate()->find($request->listing_id);

            if ($listing->available_seats <= 0) {
                return response()->json(['error' => 'No seats available'], 400);
            }

            // Decrease seat availability
            $listing->available_seats -= 1;
            $listing->save();

            $booking = Booking::create([
                'user_id' => auth()->id(),
                'listing_id' => $listing->id,
                'seat_number' => $request->seat_number,
                'booking_ref' => strtoupper(Str::random(10)),
                'status' => 'confirmed'
            ]);

            // Generate QR Code for booking_ref (SVG)
            $qrData = "BOOKING_REF:" . $booking->booking_ref;
            $qrDirectory = storage_path('app/public/qrcodes');

            // Create folder if it doesn't exist
            if (!file_exists($qrDirectory)) {
                mkdir($qrDirectory, 0755, true);
            }

            $qrPath = $qrDirectory . "/{$booking->id}.svg";

            $renderer = new ImageRenderer(
                new RendererStyle(400),
                new SvgImageBackEnd()
            );
            $writer = new Writer($renderer);
            file_put_contents($qrPath, $writer->writeString($qrData));

            Ticket::create([
                'booking_id' => $booking->id,
                'qr_code_path' => "storage/qrcodes/{$booking->id}.svg",
                'issued_at' => now()
            ]);

            return response()->json([
                'message' => 'Booking confirmed',
                'booking' => $booking->load('ticket')
            ]);
        });
    }

    // Get booking details + ticket
    public function show($id)
    {
        $booking = Booking::with('ticket', 'listing')
            ->where('user_id', auth()->id())
            ->findOrFail($id);

        return response()->json($booking);
    }
}
