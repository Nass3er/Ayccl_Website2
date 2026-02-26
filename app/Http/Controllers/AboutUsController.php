<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;


// Option 3: Overwrite name dynamically in the model

// You can also override the name accessor so that $user->name already gives the correct value:

// public function getNameAttribute($value)
// {
//     return app()->getLocale() === 'ar' ? $this->attributes['name'] : $this->attributes['name_english'];
// }


// Then $user->name works automatically.





class AboutUsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     private $pageId = 2;
     private $path = "landingPage.about-us.";
    public function index()
    {
        $pageId = 21;
        $page   = Page::findOrFail($pageId);
        $posts  = Post::where("page_id", $page->id)->where('active', true)->get();

        $companySections = [];
        $companyStats    = [];
        $mainContentHtml = ''; // محتوى "عرض تفاصيل أكثر" (قبل #####)

        if ($posts->isNotEmpty() && $posts[0]->postDetailOne) {
            $detail = $posts[0]->postDetailOne;

            // ── اختيار الحقل المناسب حسب اللغة الحالية ──
            $isArabic   = app()->getLocale() === 'ar';
            $rawContent = $isArabic
                          ? ($detail->content    ?? '')
                          : ($detail->content_en ?? $detail->content ?? '');


            // ══════════════════════════════════════════════════════════════
            // 1. تقسيم المحتوى عند علامة ##### (في سطر مستقل)
            //    - المحرر (Summernote) يُغلّف كل سطر بـ <p>...</p>
            //    - نبحث عن <p>#####</p> أو ##### مباشرة
            // ══════════════════════════════════════════════════════════════
            $splitPattern = '/<p[^>]*>\s*#{3,}\s*<\/p\s*>|#{3,}/ui';
            $splitParts   = preg_split($splitPattern, $rawContent, 2);

            $contentHtml = trim($splitParts[0]);  // قسم الكاردات
            $statsRaw    = isset($splitParts[1])
                           ? self::cleanHtml($splitParts[1])
                           : '';

            // حفظ HTML الكاردات (بدون ##### وما بعده) لعرضه في "عرض تفاصيل أكثر"
            $mainContentHtml = $contentHtml;

            // ══════════════════════════════════════════════════════════════
            // 2. تحليل الكاردات: كل <p>...</p> = سطر = كارد مستقل
            //    - السطر الأول بدون "عنوان :" → كارد "من نحن"
            //    - باقي السطور بنمط "عنوان : محتوى"
            // ══════════════════════════════════════════════════════════════
            $lines = self::htmlToLines($contentHtml);

            // خريطة الأيقونات للعناوين المعروفة + أيقونة افتراضية للعناوين الجديدة
            $iconMap = [
                // العربية
                'من نحن'            => '🏭',
                'البداية'           => '🕐',
                'الموقع'            => '📍',
                'المنتجات'          => '🧱',
                'الطاقة الإنتاجية'  => '📊',
                'التكنولوجيا'       => '⚙️',
                'الشركاء'           => '🤝',
                'الجودة'            => '🏅',
                // الإنجليزية
                'About Us'          => '🏭',
                'Beginning'         => '🕐',
                'Location'          => '📍',
                'Products'          => '🧱',
                'Capacity'          => '📊',
                'Technology'        => '⚙️',
                'Partners'          => '🤝',
                'Quality'           => '🏅',
            ];
            $defaultIcon   = '📌';
            $defaultTitle  = $isArabic ? 'من نحن' : 'About Us';

            // foreach ($lines as $index => $line) {
            //     // نمط "عنوان : محتوى" — العنوان قبل أول نقطتين
            //     if (preg_match('/^([^:]+?)\s*:\s*(.+)$/us', $line, $m)) {
            //         $title   = trim($m[1]);
            //         $content = trim($m[2]);
            //         $companySections[] = [
            //             'icon'    => $iconMap[$title] ?? $defaultIcon,
            //             'title'   => $title,
            //             'content' => $content,
            //         ];
            //     } elseif ($index === 0) {
            //         // السطر الأول بدون عنوان = "من نحن" أو "About Us"
            //         $companySections[] = [
            //             'icon'    => '🏭',
            //             'title'   => $defaultTitle,
            //             'content' => $line,
            //         ];
            //     }
            // }
            foreach ($lines as $index => $line) {
                // 1. محاولة استخراج العنوان والمحتوى بنمط "عنوان : محتوى"
                // تم تحسين النمط ليكون أكثر مرونة مع المسافات والرموز
                if (preg_match('/^(.+?)\s*[:：]\s*(.+)$/us', $line, $m)) {
                    $title   = trim($m[1]);
                    $content = trim($m[2]);

                    $companySections[] = [
                        'icon'    => $iconMap[$title] ?? $defaultIcon,
                        'title'   => $title,
                        'content' => $content,
                    ];
                }
                // 2. إذا لم يجد ":"، نتحقق هل السطر يبدأ بكلمة من الكلمات المفتاحية المعروفة (لتحسين دقة الانجليزية)
                else {
                    $foundKnownTitle = false;
                    foreach ($iconMap as $knownTitle => $icon) {
                        // إذا كان السطر يبدأ بعنوان معروف (مثل Beginning أو Location)
                        if (stripos($line, $knownTitle) === 0) {
                            $content = trim(substr($line, strlen($knownTitle)));
                            // تنظيف أي رموز متبقية في بداية المحتوى
                            $content = ltrim($content, ': ');

                            $companySections[] = [
                                'icon'    => $icon,
                                'title'   => $knownTitle,
                                'content' => $content,
                            ];
                            $foundKnownTitle = true;
                            break;
                        }
                    }

                    // 3. إذا فشل كل ما سبق وكان السطر الأول، نعتبره "من نحن"
                    if (!$foundKnownTitle && $index === 0) {
                        $companySections[] = [
                            'icon'    => '🏭',
                            'title'   => $defaultTitle,
                            'content' => $line,
                        ];
                    }
                }
            }

            // ══════════════════════════════════════════════════════════════
            // 3. تحليل الإحصائيات بعد #####
            //    النمط: "عنوان الإحصائية = 1234 وحدة اختيارية"
            // ══════════════════════════════════════════════════════════════
            if (!empty($statsRaw)) {
                $statLines = array_filter(
                    array_map('trim', explode("\n", $statsRaw)),
                    fn($l) => $l !== '' && str_contains($l, '=')
                );
                foreach ($statLines as $statLine) {
                    // if (preg_match('/^(.+?)\s*=\s*([\d,،.]+)(.*)?$/u', $statLine, $m)) {
                    //     $rawNum = (int) str_replace([',', '،', '.'], '', trim($m[2]));
                    //     $companyStats[] = [
                    //         'value'  => $rawNum,
                    //         'label'  => trim($m[1]),
                    //         'suffix' => trim($m[3] ?? ''),
                    //     ];
                    // }
                    if (preg_match('/^(.+?)\s*=\s*(.*?)([\d,،.]+)(.*)$/u', $statLine, $m)) {
                        // $m[1] -> العنوان (Project Cost)
                        // $m[2] -> أي رموز قبل الرقم (مثل $)
                        // $m[3] -> الرقم نفسه
                        // $m[4] -> التكملة (Million / Tons)

                        $rawNum = (int) str_replace([',', '،', '.'], '', trim($m[3]));
                        $prefix = trim($m[2]);
                        $suffix = trim($m[4]);

                        $companyStats[] = [
                            'value'  => $rawNum,
                            'label'  => trim($m[1]),
                            'suffix' => $prefix . ' ' . $suffix, // دمج الرموز والوحدات
                        ];
                    }
                }
            }
        }

        return view($this->path."about-company", compact(
            'posts', 'page', 'companySections', 'companyStats', 'mainContentHtml'
        ));
    }

    /**
     * تحويل HTML إلى مصفوفة سطور نصية نظيفة
     * (يُزيل وسوم HTML، ويُحوّل &nbsp; وكيانات HTML، ثم يقسّم بالسطور)
     */
    private static function htmlToLines(string $html): array
    {
        $text = str_replace(
            ['</p>', '</li>', '<br>', '<br/>', '<br />'],
            "\n",
            $html
        );
        $text = strip_tags($text);
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        // إزالة مسافات Unicode الخفية (non-breaking space \u00A0)
        $text = preg_replace('/\xc2\xa0|\x{00A0}/u', ' ', $text);

        return array_values(array_filter(
            array_map('trim', explode("\n", $text)),
            fn($l) => $l !== ''
        ));
    }

    /**
     * تنظيف HTML: تحويل وسوم الكتل إلى سطور جديدة ثم إزالة الوسوم وفك الكيانات
     * (ضروري لإبقاء كل سطر من الإحصائيات مستقلاً بعد strip_tags)
     */
    private static function cleanHtml(string $html): string
    {
        // 1. تحويل وسوم الإغلاق إلى سطور حتى لا تتدمج السطور معاً
        $text = str_replace(
            ['</p>', '</li>', '<br>', '<br/>', '<br />'],
            "\n",
            $html
        );
        // 2. إزالة باقي وسوم HTML
        $text = strip_tags($text);
        // 3. فك ترميز الكيانات مثل &nbsp;
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        // 4. إزالة مسافات Unicode الخفية
        $text = preg_replace('/\xc2\xa0|\x{00A0}/u', ' ', $text);
        return trim($text);
    }


    public function managementIndex()
    {
        $pageId = 22;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->with('mediaOne')->where('active', true)->get();


        return view($this->path."management-board", compact('posts', 'page'));
    }
    public function visionIndex()
    {
         // $pageId = app()->getlocale() =='ar' ? 23 : 123 ;
        $pageId = 23;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->where('active', true)->get();
         // $posts = Post::where("page_id", $page->id)->where('active', true)->get();


         return view($this->path."vision-message", compact('posts', 'page'));
    }

    public function futurePlansIndex()
    {
         // $pageId = app()->getlocale() =='ar' ? 23 : 123 ;
        $pageId = 24;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->where('active', true)->get();
         // $posts = Post::where("page_id", $page->id)->where('active', true)->get();

         return view($this->path."future-plans", compact('posts', 'page'));
    }
    public function socialResponsibilityIndex()
    {
         // $pageId = app()->getlocale() =='ar' ? 23 : 123 ;
        $pageId = 25;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->where('active', true)->orderBy('order')->get();
        // echo dd($posts);

         return view($this->path."social-responsibility", compact('posts', 'page'));
    }
    public function certificatesIndex()
    {
         // $pageId = app()->getlocale() =='ar' ? 23 : 123 ;
        $pageId = 26;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->with('postDetail','Media')->where('active', true)->get();

        return view($this->path."prizes-certificates", compact('posts', 'page'));
    }

    public function ourProjectsIndex()
    {
         // $pageId = app()->getlocale() =='ar' ? 23 : 123 ;
        $pageId = 27;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->with('postDetail','Media')->where('active', true)->get();

        return view($this->path."our-projects", compact('posts', 'page'));
    }

    public function environmentIndex()
    {
         // $pageId = app()->getlocale() =='ar' ? 23 : 123 ;
        $pageId = 28;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->with('postDetail','Media')->where('active', true)->get();

        return view($this->path."environment", compact('posts', 'page'));
    }



}
