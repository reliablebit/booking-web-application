<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Search listings with filters
    public function search(Request $request)
    {
        $query = Listing::query();

        if ($request->has('type')) {
            $query->where('type', $request->type);
        }

        if ($request->has('location')) {
            $query->where('location', 'ILIKE', '%' . $request->location . '%');
        }

        if ($request->has('date')) {
            $query->whereDate('start_time', $request->date);
        }

        $listings = $query->get();

        return response()->json($listings);
    }
}
