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
            // --- Systems Links ---
            // ['para' => 'الخدمة الذاتية للموظفين', 'para_en' => 'Employee Self System (ESS)', 'value' => 'link'],   //  1
            // ['para' => 'الخدمة الذاتية للعملاء', 'para_en' => 'Customer Self System (CSS)', 'value' => 'link'],    //  2
            
            // // --- Floating Button---
            // ['para' => 'رقم الواتساب', 'para_en' => 'Whatsapp', 'value' => '967711003019'],       //  12
            // ['para' => 'رقم الاتصال المباشر', 'para_en' => 'Call', 'value' => '+967711003019'],    //  13
            
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
