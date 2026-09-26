<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            'Chhattisgarh' => [
                'Raipur',
                'Bhilai',
                'Bilaspur',
                'Korba',
                'Durg',
                'Rajnandgaon',
                'Jagdalpur',
                'Ambikapur',
                'Raigarh',
                'Dhamtari',
                'Mahasamund',
            ],

            'Madhya Pradesh' => [
                'Bhopal',
                'Indore',
                'Jabalpur',
                'Gwalior',
                'Ujjain',
                'Sagar',
                'Satna',
                'Rewa',
                'Dewas',
                'Katni',
                'Ratlam',
            ],

            'Maharashtra' => [
                'Mumbai',
                'Pune',
                'Nagpur',
                'Nashik',
                'Aurangabad',
                'Thane',
                'Kolhapur',
                'Solapur',
            ],

            'California' => [
                'Los Angeles',
                'San Diego',
                'San Jose',
                'San Francisco',
                'Fresno',
                'Sacramento',
                'Oakland',
            ],

            'New York' => [
                'New York City',
                'Buffalo',
                'Rochester',
                'Yonkers',
                'Syracuse',
            ],

            'Texas' => [
                'Houston',
                'San Antonio',
                'Dallas',
                'Austin',
                'Fort Worth',
                'El Paso',
                'Arlington',
            ],

            'Florida' => [
                'Miami',
                'Orlando',
                'Tampa',
                'Jacksonville',
                'Tallahassee',
                'Fort Lauderdale',
            ],
        ];

        foreach ($data as $stateName => $cities) {

            $state = State::where('name', $stateName)->first();

            if (!$state) {
                continue;
            }

            foreach ($cities as $cityName) {

                City::updateOrCreate(
                    [
                        'state_id' => $state->id,
                        'name' => $cityName,
                    ],
                    [
                        'status' => true,
                    ]
                );
            }
        }
    }
}
