<?php

namespace Database\Seeders;

use App\Models\MediaType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MediaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MediaType::truncate();
        MediaType::insert(
            [
                [
                    "name" => "صورة",
                    "name_en" => "Photo",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "name" => "فيديو",
                    "name_en" => "Video",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "name" => "مستند",
                    "name_en" => "Document",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "name" => "أيقونة",
                    "name_en" => "Icon",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "name" => "خلفية",
                    "name_en" => "Background",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
