<?php

namespace Database\Seeders;

use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Media::truncate();
        $i = 0;
        //      Management
        $post_id = 9;
        Media::insert(
            [
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/management/1.jpg",
                    "alt" => "رئيس-مجلس-الإدارة-عبدالله-أحمد-بقشان",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/management/1.jpg",
                    "alt" => "رئيس-مجلس-الإدارة-عبدالله-أحمد-بقشان",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/management/2.jpg",
                    "alt" => "نائب-مجلس-الإدارة-زامل-عبدالرحمن-المقرن",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/management/3.jpg",
                    "alt" => "عضو-مجلس-الإدارة-محمد-ناصر-حبتور",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/management/4.jpg",
                    "alt" => "عضو-مجلس-الإدارة-وليد-عمر-باحمدان",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/management/5.jpg",
                    "alt" => "عضو-مجلس-الإدارة-فهد-راشد-العتيبي",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/management/6.jpg",
                    "alt" => "عضو-مجلس-الإدارة-عبدالله-محمد-العمودي",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/management/7.jpg",
                    "alt" => "عضو-مجلس-الإدارة-حسن-عبدالله-باروم",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/management/8.jpg",
                    "alt" => "عضو-مجلس-الإدارة-إبراهيم-سالم-الرويس",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],

            ]
        );

        $post_id=18;
        //      Vision And Message
        Media::insert(
            [
            [
                "media_type_id" => 1,
                "thumbnailpath" => "",
                "filepath" => "images/posts/vision1.jpeg",
                "alt" => "",
                "link" => "",
                "media_able_id" => $post_id++,
                "media_able_type" => "App\Models\Post",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        //      Social Reposibility
        $post_id=21;
        Media::insert(
            [
            [
                "media_type_id" => 1,
                "thumbnailpath" => "",
                "filepath" => "images/posts/vision4.jpeg",
                "alt" => "",
                "link" => "",
                "media_able_id" => $post_id++,
                "media_able_type" => "App\Models\Post",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "media_type_id" => 1,
                "thumbnailpath" => "",
                "filepath" => "images/posts/vision1.jpeg",
                "alt" => "",
                "link" => "",
                "media_able_id" => $post_id++,
                "media_able_type" => "App\Models\Post",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "media_type_id" => 1,
                "thumbnailpath" => "",
                "filepath" => "images/posts/vision2.jpeg",
                "alt" => "",
                "link" => "",
                "media_able_id" => $post_id++,
                "media_able_type" => "App\Models\Post",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);


        //      Products
        $post_id = $i + 24;
        Media::insert(
            [
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images\products\اسمنت-حضرموت-اخضر.png",
                    "alt" => "اسمنت حضرموت",
                    "link" => "files\products\product1.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images\products\أسمنت-العربية.png",
                    "alt" => "أسمنت العربية",
                    "link" => "files\products\product2.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images\products\أسمنت-حضرموت-المقاوم-للأملاح.png",
                    "alt" => "أسمنت حضرموت المقاوم للأملاح",
                    "link" => "files\products\product3.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
        //      Customer Service
        $post_id = $i + 27;
        Media::insert(
            [
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/posts/customer-service-1.jpeg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );

        //      News and Activities
        $i += 1;
        $post_id = $i + 32;
        Media::insert(
            [
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/news/slideshow1.png",
                    "filepath" => "images/news/slideshow1.png",
                    "alt" => "images/news/slideshow1.png",
                    "link" => "images/management/5.jpg",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/news/DXB.png",
                    "filepath" => "images/news/DXB.png",
                    "alt" => "images/news/DXB.png",
                    "link" => "images/news/DXB.png",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/news/الشركة-العربية-اليمنية-للإسمنت-تهدي-مركز-جامعة-حضرموت-لطب-الأسرة-سيارة-إسعاف-متكاملة-التجهيزات.jpeg",
                    "filepath" => "images/news/الشركة-العربية-اليمنية-للإسمنت-تهدي-مركز-جامعة-حضرموت-لطب-الأسرة-سيارة-إسعاف-متكاملة-التجهيزات.jpeg",
                    "alt" => "images/news/الشركة-العربية-اليمنية-للإسمنت-تهدي-مركز-جامعة-حضرموت-لطب-الأسرة-سيارة-إسعاف-متكاملة-التجهيزات.jpeg",
                    "link" => "images/news/الشركة-العربية-اليمنية-للإسمنت-تهدي-مركز-جامعة-حضرموت-لطب-الأسرة-سيارة-إسعاف-متكاملة-التجهيزات.jpeg",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/news/افتتاح-وتدشين-المسار-الجديد-لطريق-عقبة-عبدالله-غريب.jpeg",
                    "filepath" => "images/news/افتتاح-وتدشين-المسار-الجديد-لطريق-عقبة-عبدالله-غريب.jpeg",
                    "alt" => "images/news/افتتاح-وتدشين-المسار-الجديد-لطريق-عقبة-عبدالله-غريب.jpeg",
                    "link" => "images/news/افتتاح-وتدشين-المسار-الجديد-لطريق-عقبة-عبدالله-غريب.jpeg",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/news/الشركة-العربية-اليمنية-للاسمنت-المحدودة-توزع-اثاث-مكتبي-لعدة-مدارس.jpeg",
                    "filepath" => "images/news/الشركة-العربية-اليمنية-للاسمنت-المحدودة-توزع-اثاث-مكتبي-لعدة-مدارس.jpeg",
                    "alt" => "images/news/الشركة-العربية-اليمنية-للاسمنت-المحدودة-توزع-اثاث-مكتبي-لعدة-مدارس.jpeg",
                    "link" => "images/news/الشركة-العربية-اليمنية-للاسمنت-المحدودة-توزع-اثاث-مكتبي-لعدة-مدارس.jpeg",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );

        //      Social Media    footer  external links
        $i += 3;
        $post_id = $i + 34;
        Media::insert(
            [
                [
                    "media_type_id" => 4,
                    "thumbnailpath" => "images/footer/facebook-فيسبوك.svg",
                    "filepath" => "images/footer/facebook-فيسبوك.svg",
                    "alt" => "facebook-فيسبوك",
                    "link" => "https://www.facebook.com/AYCCLYemen/",
                    "media_able_id" =>  $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 4,
                    "thumbnailpath" => "images/footer/x-twitter-اكس-تويتر.svg",
                    "filepath" => "images/footer/x-twitter-اكس-تويتر.svg",
                    "alt" => "x-twitter-اكس-تويتر.svg",
                    "link" => "https://x.com/aycclyemen",
                    "media_able_id" =>  $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 4,
                    "thumbnailpath" => "images/footer/instegram-انستجرام.svg",
                    "filepath" => "images/footer/instegram-انستجرام.svg",
                    "alt" => "instegram-انستجرام",
                    "link" => "https://www.instagram.com/aycclyemen/",
                    "media_able_id" =>  $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 4,
                    "thumbnailpath" => "images/footer/YouTube-يوتيوب.svg",
                    "filepath" => "images/footer/YouTube-يوتيوب.svg",
                    "alt" => "YouTube-يوتيوب",
                    "link" => "https://www.youtube.com/@AYCCLYemen",
                    "media_able_id" =>  $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 4,
                    "thumbnailpath" => "images/footer/LinkedIn-لينكد-ان.svg",
                    "filepath" => "images/footer/LinkedIn-لينكد-ان.svg",
                    "alt" => "LinkedIn-لينكد-ان",
                    "link" => "https://www.linkedin.com/company/aycclyemen/",
                    "media_able_id" =>  $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );

        //      documents
        $post_id = $i + 39;
        Media::insert(
            [
                [
                    "media_type_id" => 3,
                    "thumbnailpath" => "images/thumbnails/document.png",
                    "filepath" => "files\products\product1.pdf",
                    "alt" => "اسمنت حضرموت",
                    "link" => "files\products\product1.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 3,
                    "thumbnailpath" => "images/thumbnails/document.png",
                    "filepath" => "files/products/product2.pdf",
                    "alt" => "أسمنت العربية",
                    "link" => "files\products\product2.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 3,
                    "thumbnailpath" => "images/thumbnails/document.png",
                    "filepath" => "files/products/product3.pdf",
                    "alt" => "أسمنت حضرموت المقاوم للأملاح",
                    "link" => "files\products\product3.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );

        //      Contact us
        // Media::insert(
        //     [
        //         [
        //             "lang_no" => 1,
        //             "media_type_id" => 1,
        //             "thumbnailpath" => "",
        //             "filepath" => "",
        //             "alt" => "اسمنت حضرموت",
        //             "link" => "",
        //             "media_able_id" => 39,
        //             "media_able_type" => "App\Models\Post",
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ],
        //     ]);

        //      Photos Galary
        $i += 2;
        $post_id = $i + 44;
        $imageNo = 1;
        Media::insert(
            [
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/photos-galary/company/العيادة.jpeg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/photos-galary/company/المصنع.jpeg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/photos-galary/company/المطعم.jpeg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/photos-galary/company/المطعم2.jpeg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/photos-galary/company/المواصلات.jpeg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/photos-galary/company/النزل.jpeg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "filepath" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "alt" => "images/photos-galary/celebration/$imageNo.jpeg",
                    "link" => "images/photos-galary/celebration/" . $imageNo++ . ".jpeg",
                    "media_able_id" => $post_id,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );

        //      Videos
        $post_id = $i + 46;
        Media::insert(
            [
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "https://img.youtube.com/vi/_okOy8ELjC4/hqdefault.jpg",
                    "filepath" => "_okOy8ELjC4",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "https://img.youtube.com/vi/AFLU0b_eyRM/hqdefault.jpg",
                    "filepath" => "AFLU0b_eyRM",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "https://img.youtube.com/vi/ymZM9SHfnvI/hqdefault.jpg",
                    "filepath" => "ymZM9SHfnvI",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "https://img.youtube.com/vi/oROh-CY1Tpo/hqdefault.jpg",
                    "filepath" => "oROh-CY1Tpo",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "https://img.youtube.com/vi/6LI2GvW15NM/hqdefault.jpg",
                    "filepath" => "6LI2GvW15NM",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );

        //      Welcome (Slider)
        $i += 3;
        $post_id = $i + 48;
        Media::insert(
            [
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/slids/slide1.jpeg",
                    "alt" => "اسمنت حضرموت",
                    // "link" => "http://127.0.0.1:8000/ar/products",
                    "link" => url(app()->getLocale() . '/products'),
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/slids/slide2.png",
                    "alt" => "قوة البناء",
                    // "link" => "http://127.0.0.1:8000/ar/contactus",
                    "link" => url(app()->getLocale() . '/contactus'),
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "",
                    "filepath" => "images/slids/slide3.png",
                    "alt" => "فخر الصناعة",
                    "link" => null,
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
        $i += 2;
        //      Certificate
        $post_id =  $i+ 49;
        Media::insert(
        [
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\prizes-and-certificates\نظام-إدارة-الطاقة-ISO-50001-2018.png",
                    "filepath" => "images\prizes-and-certificates\نظام-إدارة-الطاقة-ISO-50001-2018.png",
                    "alt" => "",
                    "link" => "files\prizes-and-certificates\نظام-إدارة-الطاقة-ISO-50001-2018.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\prizes-and-certificates\نظام-إدارة-الجودة-العالمي-ISO-9001-2015.png",
                    "filepath" => "images\prizes-and-certificates\نظام-إدارة-الجودة-العالمي-ISO-9001-2015.png",
                    "alt" => "",
                    "link" => "files\prizes-and-certificates\نظام-إدارة-الجودة-العالمي-ISO-9001-2015.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\prizes-and-certificates\نظام-إدارة-البيئة-ISO-14001-2015.png",
                    "filepath" => "images\prizes-and-certificates\نظام-إدارة-البيئة-ISO-14001-2015.png",
                    "alt" => "",
                    "link" => "files\prizes-and-certificates\نظام-إدارة-البيئة-ISO-14001-2015.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\prizes-and-certificates\نظام-إدارة-الصحة-والسلامة-المهنية-ISO-45001-2018.png",
                    "filepath" => "images\prizes-and-certificates\نظام-إدارة-الصحة-والسلامة-المهنية-ISO-45001-2018.png",
                    "alt" => "",
                    "link" => "files\prizes-and-certificates\نظام-إدارة-الصحة-والسلامة-المهنية-ISO-45001-2018.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\prizes-and-certificates\شهادة-فحص-حضرموت-المقاوم-sgs.png",
                    "filepath" => "images\prizes-and-certificates\شهادة-فحص-حضرموت-المقاوم-sgs.png",
                    "alt" => "",
                    "link" => "files\prizes-and-certificates\شهادة-فحص-حضرموت-المقاوم-sgs.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\prizes-and-certificates\شهادة-فحص-حضرموت-الاخضر-sgs.png",
                    "filepath" => "images\prizes-and-certificates\شهادة-فحص-حضرموت-الاخضر-sgs.png",
                    "alt" => "",
                    "link" => "files\prizes-and-certificates\شهادة-فحص-حضرموت-الاخضر-sgs.pdf",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
        //      hadhrami
        $post_id =  $i+ 55;
        Media::insert(
        [
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\بنك التضامن المكلا.jpg",
                    "filepath" => "images\hadhrami\بنك التضامن المكلا.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\سوق العسل القطن.jpg",
                    "filepath" => "images\hadhrami\سوق العسل القطن.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مجمع الساحل التموينات النفطية - بروم.jpg",
                    "filepath" => "images\hadhrami\مجمع الساحل التموينات النفطية - بروم.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مركز الصادرات السمكية المكلا.jpg",
                    "filepath" => "images\hadhrami\مركز الصادرات السمكية المكلا.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مشروع البييئة المصطفوية بتريم.jpg",
                    "filepath" => "images\hadhrami\مشروع البييئة المصطفوية بتريم.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مشـــروع الطاقة الشمسية محافظة شبوة عتق.jpg",
                    "filepath" => "images\hadhrami\مشـــروع الطاقة الشمسية محافظة شبوة عتق.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مشروع سوق البصل  تريم.jpg",
                    "filepath" => "images\hadhrami\مشروع سوق البصل  تريم.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مشروع مدرسة سمية المكلا.jpg",
                    "filepath" => "images\hadhrami\مشروع مدرسة سمية المكلا.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
        //      hadhrami
        $post_id =  $i+ 55;
        Media::insert(
            [
                    [
                        "media_type_id" => 1,
                        "thumbnailpath" => "images\hadhrami\بنك التضامن المكلا.jpg",
                        "filepath" => "images\hadhrami\بنك التضامن المكلا.jpg",
                        "alt" => "",
                        "link" => "",
                        "media_able_id" => $post_id++,
                        "media_able_type" => "App\Models\Post",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\سوق العسل القطن.jpg",
                    "filepath" => "images\hadhrami\سوق العسل القطن.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مجمع الساحل التموينات النفطية - بروم.jpg",
                    "filepath" => "images\hadhrami\مجمع الساحل التموينات النفطية - بروم.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مركز الصادرات السمكية المكلا.jpg",
                    "filepath" => "images\hadhrami\مركز الصادرات السمكية المكلا.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مشروع البييئة المصطفوية بتريم.jpg",
                    "filepath" => "images\hadhrami\مشروع البييئة المصطفوية بتريم.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مشـــروع الطاقة الشمسية محافظة شبوة عتق.jpg",
                    "filepath" => "images\hadhrami\مشـــروع الطاقة الشمسية محافظة شبوة عتق.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مشروع سوق البصل  تريم.jpg",
                    "filepath" => "images\hadhrami\مشروع سوق البصل  تريم.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\hadhrami\مشروع مدرسة سمية المكلا.jpg",
                    "filepath" => "images\hadhrami\مشروع مدرسة سمية المكلا.jpg",
                    "alt" => "",
                    "link" => "",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );

        //  map and other systems css and ess - starts after map -> 74
        $post_id = 75;
        Media::insert(
            [
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\loginimg\ESS.png",
                    "filepath" => "images\loginimg\ESS.png",
                    "alt" => "",
                    "link" => "http://ixerpweb.ayccl.com:8189/ixias/F?P=IXESS",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images\loginimg\CSS.png",
                    "filepath" => "images\loginimg\CSS.png",
                    "alt" => "",
                    "link" => "http://ixerpweb.ayccl.com:8189/ixias/F?P=IXCSS",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/footer/رقم-الاتصال-المباشر-direct-phone-number.svg",
                    "filepath" => "images/footer/رقم-الاتصال-المباشر-direct-phone-number.svg",
                    "alt" => "",
                    "link" => "+967711003019",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    "media_type_id" => 1,
                    "thumbnailpath" => "images/footer/رقم-الواتساب-whatsapp-number.svg",
                    "filepath" => "images/footer/رقم-الواتساب-whatsapp-number.svg",
                    "alt" => "",
                    "link" => "967711003019",
                    "media_able_id" => $post_id++,
                    "media_able_type" => "App\Models\Post",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
