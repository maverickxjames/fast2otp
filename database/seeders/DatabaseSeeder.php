<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        DB::table('admins')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
        ]);

        DB::table('settings')->insert([
            ['setting_key' => 'otp_price', 'setting_value' => '0.20'],
            ['setting_key' => 'otp_limit_per_day', 'setting_value' => '1000'],
            ['setting_key' => 'minimum_recharge', 'setting_value' => '10.00'],
            ['setting_key' => 'kyc_required', 'setting_value' => 'true'],
            ['setting_key' => 'require_kyc_for_otp', 'setting_value' => 'false'],
        ]);
    }
}
