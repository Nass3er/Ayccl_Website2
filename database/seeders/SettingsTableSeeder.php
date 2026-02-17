<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [

            // --- Email---
            ['para' => 'mail_mailer', 'para_en' =>       'mail_mailer', 'value' => 'smtp'],           //  3
            ['para' => 'mail_host', 'para_en' =>         'mail_host', 'value' => 'smtp.gmail.com'],     //  4
            ['para' => 'mail_port', 'para_en' =>         'mail_port', 'value' => '587'],                    //  5
            ['para' => 'mail_username', 'para_en' =>     'mail_username', 'value' => 'ayccl.notifications@gmail.com'],     //  6
            ['para' => 'mail_password', 'para_en' =>     'mail_password', 'value' => 'kqevkehgvpptinhw'],       //  7
            ['para' => 'mail_encryption', 'para_en' =>   'mail_encryption', 'value' => 'tls'],      //  8
            ['para' => 'mail_from_address', 'para_en' => 'mail_from_address', 'value' => 'ayccl.notifications@gmail.com'],     //  9
            ['para' => 'mail_from_name', 'para_en' =>    'mail_from_name', 'value' => 'AYCCL Website'],    //  10
            
        ];

        DB::table('settings')->insert($settings);
    }
}
