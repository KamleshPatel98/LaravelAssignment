<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'India', 'code' => 'IN', 'phone_code' => '+91'],
            ['name' => 'United States', 'code' => 'US', 'phone_code' => '+1'],
            ['name' => 'United Kingdom', 'code' => 'GB', 'phone_code' => '+44'],
            ['name' => 'Australia', 'code' => 'AU', 'phone_code' => '+61'],
            ['name' => 'United Arab Emirates', 'code' => 'AE', 'phone_code' => '+971'],
            ['name' => 'Singapore', 'code' => 'SG', 'phone_code' => '+65'],
            ['name' => 'Germany', 'code' => 'DE', 'phone_code' => '+49'],
            ['name' => 'France', 'code' => 'FR', 'phone_code' => '+33'],
            ['name' => 'Japan', 'code' => 'JP', 'phone_code' => '+81'],
        ];

        foreach ($countries as $country) {

            Country::updateOrCreate(
                [
                    'code' => $country['code'],
                ],
                [
                    'name' => $country['name'],
                    'phone_code' => $country['phone_code'],
                    'status' => true,
                ]
            );
        }
    }
}
