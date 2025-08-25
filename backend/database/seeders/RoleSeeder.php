<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Role::firstOrCreate(['name' => 'user']);
//        Role::firstOrCreate(['name' => 'merchant']);
//        Role::firstOrCreate(['name' => 'admin']);
        Role::create(['name' => 'merchant', 'guard_name' => 'api']);
        Role::create(['name' => 'user', 'guard_name' => 'api']);
        Role::create(['name' => 'admin', 'guard_name' => 'api']);
    }
}
