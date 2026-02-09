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

                //added by nasser
                [
                    //  17
                    "name" => "مشاريع",
                    "name_en" => "Projects",
                    "type" => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  18
                    "name" => "البيئة",
                    "name_en" => "Environment",
                    "type" => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  19
                    "name" => "مدونة اسمنتية",
                    "name_en" => "Cement Blog",
                    "type" => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  20
                    "name" => "قوى عاملة",
                    "name_en" => "Employees",
                    "type" => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  21
                    "name" => "ضيوفنا",
                    "name_en" => "Our Guests",
                    "type" => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  22
                    "name" => "شهادات الفحص",
                    "name_en" => "Inspection Certificates",
                    "type" => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    //  23
                    "name" => "المواصفات",
                    "name_en" => "Specifications",
                    "type" => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],


            ]
        );
    }
}
