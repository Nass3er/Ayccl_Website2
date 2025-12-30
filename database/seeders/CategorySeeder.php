<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::truncate();
        Category::insert(
            [
                [
                    //  1
                    "name" => "مقالة",
                    "name_en" => "Article",
                    "type" => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  2
                    "name" => "الفعاليات",
                    "name_en" => "Activites",
                    "type" => 51,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  3
                    "name" => "تاريخ",
                    "name_en" => "Date",
                    "type" => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  4
                    "name" => "منتجات",
                    "name_en" => "Products",
                    "type" => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  5
                    "name" => "إعلانات",
                    "name_en" => "Ads",
                    "type" => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  6
                    "name" => "نشرات تلفزيونية",
                    "name_en" => "Television Post",
                    "type" => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  7
                    "name" => "أخبار",
                    "name_en" => "News",
                    "type" => 51,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  8
                    "name" => "مستندات",
                    "name_en" => "Documnts",
                    "type" => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  9
                    "name" => "قناتنا يوتيوب",
                    "name_en" => "Our YouTube Channel",
                    "type" => 53,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  10
                    "name" => "سلايدر",
                    "name_en" => "Sliders",
                    "type" => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  11
                    "name" => "عن الشركة",
                    "name_en" => "About Company",
                    "type" => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  12
                    "name" => "شهائد وجوائز",
                    "name_en" => "Certificates and Prizes",
                    "type" => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  13
                    "name" => "تواصل معنا",
                    "name_en" => "Contact Us",
                    "type" => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  14
                    "name" => "أنظمة CSS & ESS",
                    "name_en" => "CSS & ESS",
                    "type" => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  15
                    "name" => "زر الانتقال المباشر",
                    "name_en" => "Floating Button",
                    "type" => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  16
                    "name" => "(Footer)روابط سوشال ميديا",
                    "name_en" => "Social Media Icons (Footer)",
                    "type" => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],


            ]
        );
    }
}
