<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            'Raipur' => [
                'Shankar Nagar',
                'Telibandha',
                'Pandri',
                'Devendra Nagar',
                'Tatibandh',
                'Mowa',
                'Katora Talab',
            ],

            'Bhilai' => [
                'Supela',
                'Nehru Nagar',
                'Smriti Nagar',
                'Kohka',
                'Risali',
                'Sector 6',
            ],

            'Bilaspur' => [
                'Vyapar Vihar',
                'Telipara',
                'Mangla',
                'Sarkanda',
                'Torwa',
                'Rajkishore Nagar',
            ],

            'Jabalpur' => [
                'Wright Town',
                'Napier Town',
                'Vijay Nagar',
                'Adhartal',
                'Gorakhpur',
                'Madan Mahal',
                'Ranjhi',
            ],

            'Bhopal' => [
                'MP Nagar',
                'Arera Colony',
                'Kolar Road',
                'Bairagarh',
                'Shahpura',
                'Bawadia Kalan',
            ],

            'Indore' => [
                'Vijay Nagar',
                'Rau',
                'Palasia',
                'Bhawarkuan',
                'Sudama Nagar',
                'Scheme No. 54',
            ],

            'Mumbai' => [
                'Andheri',
                'Bandra',
                'Borivali',
                'Dadar',
                'Goregaon',
                'Powai',
            ],

            'Pune' => [
                'Kothrud',
                'Viman Nagar',
                'Hinjewadi',
                'Baner',
                'Wakad',
                'Hadapsar',
            ],

            'Los Angeles' => [
                'Downtown Los Angeles',
                'Hollywood',
                'Beverly Hills',
                'Koreatown',
                'Santa Monica',
                'Venice',
            ],

            'San Francisco' => [
                'Downtown',
                'SoMa',
                'Mission District',
                'Chinatown',
                'Sunset District',
                'Richmond District',
            ],

            'Houston' => [
                'Downtown Houston',
                'Midtown',
                'Montrose',
                'Uptown',
                'Westchase',
                'Spring Branch',
            ],

            'New York City' => [
                'Manhattan',
                'Brooklyn',
                'Queens',
                'Bronx',
                'Staten Island',
            ],
        ];

        foreach ($data as $cityName => $areas) {

            $city = City::where('name', $cityName)->first();

            if (!$city) {
                continue;
            }

            foreach ($areas as $areaName) {

                Area::updateOrCreate(
                    [
                        'city_id' => $city->id,
                        'name' => $areaName,
                    ],
                    [
                        'status' => true,
                    ]
                );
            }
        }
    }
}
