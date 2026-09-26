<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'India' => [
                ['name' => 'Andhra Pradesh', 'code' => 'AP'],
                ['name' => 'Arunachal Pradesh', 'code' => 'AR'],
                ['name' => 'Assam', 'code' => 'AS'],
                ['name' => 'Bihar', 'code' => 'BR'],
                ['name' => 'Chhattisgarh', 'code' => 'CG'],
                ['name' => 'Goa', 'code' => 'GA'],
                ['name' => 'Gujarat', 'code' => 'GJ'],
                ['name' => 'Haryana', 'code' => 'HR'],
                ['name' => 'Himachal Pradesh', 'code' => 'HP'],
                ['name' => 'Jharkhand', 'code' => 'JH'],
                ['name' => 'Karnataka', 'code' => 'KA'],
                ['name' => 'Kerala', 'code' => 'KL'],
                ['name' => 'Madhya Pradesh', 'code' => 'MP'],
                ['name' => 'Maharashtra', 'code' => 'MH'],
                ['name' => 'Odisha', 'code' => 'OD'],
                ['name' => 'Punjab', 'code' => 'PB'],
                ['name' => 'Rajasthan', 'code' => 'RJ'],
                ['name' => 'Tamil Nadu', 'code' => 'TN'],
                ['name' => 'Telangana', 'code' => 'TS'],
                ['name' => 'Uttar Pradesh', 'code' => 'UP'],
                ['name' => 'Uttarakhand', 'code' => 'UK'],
                ['name' => 'West Bengal', 'code' => 'WB'],
            ],
            'United States' => [
                ['name' => 'Alabama', 'code' => 'AL'],
                ['name' => 'Alaska', 'code' => 'AK'],
                ['name' => 'Arizona', 'code' => 'AZ'],
                ['name' => 'Arkansas', 'code' => 'AR'],
                ['name' => 'California', 'code' => 'CA'],
                ['name' => 'Colorado', 'code' => 'CO'],
                ['name' => 'Connecticut', 'code' => 'CT'],
                ['name' => 'Delaware', 'code' => 'DE'],
                ['name' => 'Florida', 'code' => 'FL'],
                ['name' => 'Georgia', 'code' => 'GA'],
                ['name' => 'Hawaii', 'code' => 'HI'],
            ],
        ];

        foreach ($data as $countryName => $states) {

            $country = Country::where('name', $countryName)->first();

            if (!$country) {
                continue;
            }

            foreach ($states as $state) {

                State::updateOrCreate(
                    [
                        'country_id' => $country->id,
                        'name' => $state['name'],
                    ],
                    [
                        'code' => $state['code'],
                        'status' => true,
                    ]
                );
            }
        }
    }
}
