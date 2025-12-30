<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();
        //      About Us
        //      $post_id =1;
        Post::insert(
            [
                [
                    "category_id" => 1,
                    "page_id" => 21,
                    'date'  => Carbon::now(),
                    "order" => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "category_id" => 1,
                    "page_id" => 21,
                    'date'  => Carbon::now(),
                    "order" => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "category_id" => 1,
                    "page_id" => 21,
                    'date'  => Carbon::now(),
                    "order" => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "category_id" => 1,
                    "page_id" => 21,
                    'date'  => Carbon::now(),
                    "order" => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "category_id" => 1,
                    "page_id" => 21,
                    'date'  => Carbon::now(),
                    "order" => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "category_id" => 1,
                    "page_id" => 21,
                    'date'  => Carbon::now(),
                    "order" => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "category_id" => 1,
                    "page_id" => 21,
                    'date'  => Carbon::now(),
                    "order" => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "category_id" => 1,
                    "page_id" => 21,
                    'date'  => Carbon::now(),
                    "order" => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );

        //      Management board
        Post::insert(
            [
                [
                    'category_id' => 1,
                    'page_id'     => 22,
                    'date'  => Carbon::now(),
                    'order'       => 0,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 22,
                    'date'  => Carbon::now(),
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 22,
                    'date'  => Carbon::now(),
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 22,
                    'date'  => Carbon::now(),
                    'order'       => 3,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 22,
                    'date'  => Carbon::now(),
                    'order'       => 4,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 22,
                    'date'  => Carbon::now(),
                    'order'       => 5,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 22,
                    'date'  => Carbon::now(),
                    'order'       => 6,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 22,
                    'date'  => Carbon::now(),
                    'order'       => 7,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 22,
                    'date'  => Carbon::now(),
                    'order'       => 8,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );
        //      Vision and message seeder
        Post::insert(
            [
                [
                    'category_id' => 1,
                    'page_id'     => 23,
                    'date'  => Carbon::now(),
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 23,
                    'date'  => Carbon::now(),
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 23,
                    'date'  => Carbon::now(),
                    'order'       => 3,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );

        //      social reponsibility seeder
        Post::insert(
            [
                [
                    'category_id' => 1,
                    'page_id'     => 25,
                    'date'  => Carbon::now(),
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [   
                    'category_id' => 1,
                    'page_id'     => 25,   
                    'date'  => Carbon::now(),
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 25,
                    'date'  => Carbon::now(),
                    'order'       => 3,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );
        //      products
        Post::insert(
            [
                [
                    
                    'category_id' => 4,
                    'page_id'     => 32,
                    
                     // swapped
                    
                    'date'  => Carbon::now(),
                     // swapped
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 4,
                    'page_id'     => 32,
                    
                    
                    
                    'date'  => Carbon::now(),
                     // swapped
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 4,
                    'page_id'     => 32,
                    
                    
                    
                    'date'  => Carbon::now(),
                     // swapped
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );

        //      customer service
        Post::insert(
            [
                [
                    
                    'category_id' => 1,
                    'page_id'     => 33,
                    'date'  => Carbon::now(),
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );

        //      employee advantages
        Post::insert(
            [
                [
                    
                    'category_id' => 1,
                    'page_id'     => 41,
                    
                    
                    
                    'date'  => Carbon::now(),
                    
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 1,
                    'page_id'     => 41,
                    
                    
                    
                    'date'  => Carbon::now(),
                    
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 1,
                    'page_id'     => 41,
                    
                    
                    
                    'date'  => Carbon::now(),
                    
                    'order'       => 3,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 1,
                    'page_id'     => 41,
                    
                    
                    
                    'date'  => Carbon::now(),
                    
                    'order'       => 4,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 1,
                    'page_id'     => 41,
                    
                    
                    
                    'date'  => Carbon::now(),
                    
                    'order'       => 5,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );

        //      News and Activities
        Post::insert(
            [
                [
                    
                    'category_id' => 1,
                    'page_id'     => 51,
                    'date'        => "6/17/2021",
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 51,
                    'date'        => "2/4/2020",
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 51,
                    'date'        => "11/13/2018",
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 51,
                    'date'        => "7/12/2018",
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 51,
                    'date'        => "3/29/2018",
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );

        //      social links footer
        Post::insert(
            [
                [
                    
                    'category_id' => 16,
                    'page_id'     => 8,
                    'date'  => Carbon::now(),                    
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 16,
                    'page_id'     => 8,
                    'date'  => Carbon::now(),                    
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 16,
                    'page_id'     => 8,
                    'date'  => Carbon::now(),
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 16,
                    'page_id'     => 8,
                    'date'  => Carbon::now(),                    
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 16,
                    'page_id'     => 8,
                    'date'  => Carbon::now(),
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );
        //      Documents
        Post::insert(
            [
                [
                    
                    'category_id' => 1,
                    'page_id'     => 54,
                    
                    
                    
                    'date'  => Carbon::now(),
                    
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 1,
                    'page_id'     => 54,
                    
                    
                    
                    'date'  => Carbon::now(),
                    
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 1,
                    'page_id'     => 54,
                    
                    
                    
                    'date'  => Carbon::now(),
                    
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );

        //      Contact Us
        Post::insert(
            [
                [
                    
                    'category_id' => 1,
                    'page_id'     => 7,
                    'date'        => '',
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 1,
                    'page_id'     => 7,
                    'date'        => '',
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 1,
                    'page_id'     => 7,
                    'date'        => '',
                    'order'       => 3,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 1,
                    'page_id'     => 7,
                    'date'        => '',
                    'order'       => 4,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );
        //      Photos Galary
        Post::insert(
            [
                [
                    
                    'category_id' => 1,
                    'page_id'     => 52,
                    'date'        => '',
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    
                    'category_id' => 1,
                    'page_id'     => 52,
                    'date'        => '',
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );
        //      Videos
        Post::insert(
            [
                [
                    'category_id' => 9,
                    'page_id'     => 53,
                    'date'        => '12/06/2018',
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 9,
                    'page_id'     => 53,
                    'date'        => '30/05/2018',
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 9,
                    'page_id'     => 53,
                    'date'        => '16/07/2018',
                    'order'       => 3,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 9,
                    'page_id'     => 53,
                    'date'        => '09/01/2019',
                    'order'       => 4,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 9,
                    'page_id'     => 53,
                    'date'        => ' 08/04/2021',
                    'order'       => 5,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );

        //      Start Page
        Post::insert(
            [
                [
                    'category_id' => 10,
                    'page_id'     => 1,
                    'date'        => '12/06/2018',
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 10,
                    'page_id'     => 1,
                    'date'        => '12/06/2018',
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 10,
                    'page_id'     => 1,
                    'date'        => '12/06/2018',
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );

        //      Certificate and prizes starts from 58 
        Post::insert(
            [
                [
                    'category_id' => 1,
                    'page_id'     => 26,
                    'date'        => '',
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 26,
                    'date'        => '',
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 26,
                    'date'        => '',
                    'order'       => 3,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 26,
                    'date'        => '',
                    'order'       => 4,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 26,
                    'date'        => '',
                    'order'       => 5,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 26,
                    'date'        => '',
                    'order'       => 6,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );
        //      hadhrami starts from 64 
        Post::insert(
            [
                [
                    'category_id' => 1,
                    'page_id'     => 31,
                    'date'        => '',
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 31,
                    'date'        => '',
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 31,
                    'date'        => '',
                    'order'       => 3,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 31,
                    'date'        => '',
                    'order'       => 4,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 31,
                    'date'        => '',
                    'order'       => 5,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 31,
                    'date'        => '',
                    'order'       => 6,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 31,
                    'date'        => '',
                    'order'       => 7,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 1,
                    'page_id'     => 31,
                    'date'        => '',
                    'order'       => 8,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );
        
        //      Links starts from 74
        Post::insert(
            [
                [
                    'category_id' => 13,
                    'page_id'     => 8,
                    'date'        => '',
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 14,
                    'page_id'     => 8,
                    'date'        => '',
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 14,
                    'page_id'     => 8,
                    'date'        => '',
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 15,
                    'page_id'     => 8,
                    'date'        => '',
                    'order'       => 1,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 15,
                    'page_id'     => 8,
                    'date'        => '',
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
                [
                    'category_id' => 13,
                    'page_id'     => 8,
                    'date'        => '',
                    'order'       => 2,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],[
                    'category_id' => 13,
                    'page_id'     => 8,
                    'date'        => '',
                    'order'       => 3,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],[
                    'category_id' => 13,
                    'page_id'     => 8,
                    'date'        => '',
                    'order'       => 4,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],[
                    'category_id' => 13,
                    'page_id'     => 8,
                    'date'        => '',
                    'order'       => 5,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ],
            ]
        );
    }
}
