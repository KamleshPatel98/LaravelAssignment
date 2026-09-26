<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Mobiles' => [
                ['name' => 'Smartphones', 'image' => 'sub_categories/smartphones.jpg'],
                ['name' => 'Feature Phones', 'image' => 'sub_categories/feature-phones.jpg'],
                ['name' => 'Tablets', 'image' => 'sub_categories/tablets.jpg'],
                ['name' => 'Mobile Accessories', 'image' => 'sub_categories/mobile-accessories.jpg'],
            ],

            'Cars' => [
                ['name' => 'Hatchback', 'image' => 'sub_categories/hatchback.jpg'],
                ['name' => 'Sedan', 'image' => 'sub_categories/sedan.jpg'],
                ['name' => 'SUV', 'image' => 'sub_categories/suv.jpg'],
                ['name' => 'Luxury Cars', 'image' => 'sub_categories/luxury-cars.jpg'],
            ],

            'Bikes' => [
                ['name' => 'Motorcycles', 'image' => 'sub_categories/motorcycles.jpg'],
                ['name' => 'Scooters', 'image' => 'sub_categories/scooters.jpg'],
                ['name' => 'Electric Bikes', 'image' => 'sub_categories/electric-bikes.jpg'],
            ],

            'Electronics' => [
                ['name' => 'TV', 'image' => 'sub_categories/tv.jpg'],
                ['name' => 'Computer & Laptop', 'image' => 'sub_categories/computer-laptop.jpg'],
                ['name' => 'Cameras', 'image' => 'sub_categories/cameras.jpg'],
                ['name' => 'Audio', 'image' => 'sub_categories/audio.jpg'],
            ],

            'Furniture' => [
                ['name' => 'Sofa', 'image' => 'sub_categories/sofa.jpg'],
                ['name' => 'Bed', 'image' => 'sub_categories/bed.jpg'],
                ['name' => 'Table & Chair', 'image' => 'sub_categories/table-chair.jpg'],
            ],

            'Property' => [
                ['name' => 'For Sale', 'image' => 'sub_categories/for-sale.jpg'],
                ['name' => 'For Rent', 'image' => 'sub_categories/for-rent.jpg'],
                ['name' => 'Land & Plot', 'image' => 'sub_categories/land-plot.jpg'],
            ],

            'Jobs' => [
                ['name' => 'IT & Software', 'image' => 'sub_categories/it-software.jpg'],
                ['name' => 'Sales', 'image' => 'sub_categories/sales.jpg'],
                ['name' => 'Marketing', 'image' => 'sub_categories/marketing.jpg'],
                ['name' => 'Part Time Jobs', 'image' => 'sub_categories/part-time-jobs.jpg'],
            ],

            'Fashion' => [
                ['name' => 'Men', 'image' => 'sub_categories/men.jpg'],
                ['name' => 'Women', 'image' => 'sub_categories/women.jpg'],
                ['name' => 'Kids', 'image' => 'sub_categories/kids.jpg'],
                ['name' => 'Shoes', 'image' => 'sub_categories/shoes.jpg'],
            ],

            'Books' => [
                ['name' => 'Academic Books', 'image' => 'sub_categories/academic-books.jpg'],
                ['name' => 'Novels', 'image' => 'sub_categories/novels.jpg'],
                ['name' => 'Competitive Exams', 'image' => 'sub_categories/competitive-exams.jpg'],
            ],

            'Sports' => [
                ['name' => 'Cricket', 'image' => 'sub_categories/cricket.jpg'],
                ['name' => 'Football', 'image' => 'sub_categories/football.jpg'],
                ['name' => 'Fitness Equipment', 'image' => 'sub_categories/fitness-equipment.jpg'],
            ],

            'Pets' => [
                ['name' => 'Dogs', 'image' => 'sub_categories/dogs.jpg'],
                ['name' => 'Cats', 'image' => 'sub_categories/cats.jpg'],
                ['name' => 'Birds', 'image' => 'sub_categories/birds.jpg'],
            ],

            'Services' => [
                ['name' => 'Home Services', 'image' => 'sub_categories/home-services.jpg'],
                ['name' => 'Repair Services', 'image' => 'sub_categories/repair-services.jpg'],
                ['name' => 'Professional Services', 'image' => 'sub_categories/professional-services.jpg'],
            ],
        ];

        foreach ($data as $categoryName => $subCategories) {

            $category = Category::where('name', $categoryName)->first();

            if (!$category) {
                continue;
            }

            foreach ($subCategories as $subCategory) {

                SubCategory::updateOrCreate(
                    [
                        'slug' => Str::slug($category['name'] .'-'. $subCategory['name']),
                        'category_id' => $category->id,
                        'name' => $subCategory['name'],
                        'image' => $subCategory['image'],
                        'description' => null,
                        'status' => true,
                    ]
                );
            }
        }
    }
}
