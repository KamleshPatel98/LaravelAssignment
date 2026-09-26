<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Product;
use App\Models\State;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        if (!$user) {
            return;
        }

        $products = [
            [
                'name' => 'Used Honda City',
                'detail' => 'Well maintained Honda City in good condition.',
                'category' => 'Cars',
                'sub_category' => 'Cars',
                'country' => 'India',
                'state' => 'Maharashtra',
                'city' => 'Mumbai',
                'area' => 'Kandivali West',
                'price' => 611000,
            ],

            [
                'name' => 'iPhone 15',
                'detail' => 'iPhone 15 in excellent condition with original box.',
                'category' => 'Mobiles',
                'sub_category' => 'Smartphones',
                'country' => 'India',
                'state' => 'Chhattisgarh',
                'city' => 'Raipur',
                'area' => 'Pandri',
                'price' => 55000,
            ],

            [
                'name' => 'Dell Laptop',
                'detail' => 'Dell laptop suitable for office and study use.',
                'category' => 'Electronics',
                'sub_category' => 'Laptops',
                'country' => 'India',
                'state' => 'Madhya Pradesh',
                'city' => 'Jabalpur',
                'area' => 'Wright Town',
                'price' => 35000,
            ],

            [
                'name' => 'AC Repair Service',
                'detail' => 'Professional AC repair and servicing service.',
                'category' => 'Services',
                'sub_category' => 'Home Services',
                'country' => 'India',
                'state' => 'Chhattisgarh',
                'city' => 'Raipur',
                'area' => 'Shankar Nagar',
                'price' => 500,
            ],
        ];

        foreach ($products as $item) {

            $category = Category::where('name', $item['category'])->first();

            if (!$category) {
                continue;
            }

            $subCategory = SubCategory::where('category_id', $category->id)
                ->where('name', $item['sub_category'])
                ->first();

            if (!$subCategory) {
                continue;
            }

            $country = Country::where('name', $item['country'])->first();

            if (!$country) {
                continue;
            }

            $state = State::where('country_id', $country->id)
                ->where('name', $item['state'])
                ->first();

            if (!$state) {
                continue;
            }

            $city = City::where('state_id', $state->id)
                ->where('name', $item['city'])
                ->first();

            if (!$city) {
                continue;
            }

            $area = Area::where('city_id', $city->id)
                ->where('name', $item['area'])
                ->first();

            if (!$area) {
                continue;
            }

            //Style Slug

            $slug = Str::slug(
                $item['name']
                . '-in-'
                . $area->name
                . '-'
                . $city->name
            );

            $slug .= '-iid-' . uniqid();

            Product::updateOrCreate(
                [
                    'slug' => $slug,
                ],
                [
                    'name' => $item['name'],
                    'detail' => $item['detail'],
                    'image' => null,

                    'user_id' => $user->id,

                    'category_id' => $category->id,
                    'sub_category_id' => $subCategory->id,

                    'country_id' => $country->id,
                    'state_id' => $state->id,
                    'city_id' => $city->id,
                    'area_id' => $area->id,

                    'price' => $item['price'],
                    'status' => true,
                ]
            );
        }
    }
}
