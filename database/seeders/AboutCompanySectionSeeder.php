<?php

namespace Database\Seeders;

use App\Models\AboutCompanySection;
use Illuminate\Database\Seeder;

class AboutCompanySectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            [
                'icon' => '🏭',
                'title' => 'من نحن',
                'title_en' => 'About Us',
                'content' => 'الشركة العربية اليمنية للأسمنت هي شركة يمنية محدودة برأس مال معلن وقدرة 142,500,000 دولار وبتكلفة إجمالية قدرها 250 مليون دولار أمريكي.',
                'content_en' => 'Arabian Yemen Cement Company is a Yemeni limited company with an authorized capital of $142,500,000 and a total cost of $250 million USD.',
                'order' => 1,
            ],
            [
                'icon' => '🕐',
                'title' => 'البداية',
                'title_en' => 'Beginning',
                'content' => 'جاءت فكرة إقامة مشروع الشركة العربية اليمنية للأسمنت المحدودة في مدينة المكلا لتلبي احتياجات ورغبات المستهلكين في السوق المحلي والإقليمي من الإسمنت. ولتوفر المواد الخام اللازمة لإقامة صناعة الإسمنت بالقرب من مدينة المكلا فقد تبنى فكرة إقامة المشروع المهندس/ عبدالله أحمد بقشان وهو من رجال الأعمال المعروفين في اليمن والمملكة العربية السعودية، وقد عمل على بلورة فكرة إقامة المشروع عبر شركة ذات شهرة وخبرة عالمية في مجال إقامة مشاريع الإسمنت في العالم، وذلك بعمل الدراسات الفنية اللازمة وعلى ضوء ذلك بدء العمل في المشروع في 2/6/2006م والإنتاج التجريبي في ديسمبر 2009م، كأحد المشاريع الأساسية المساهمة في تطوير البنية التحتية والنمو الإقتصادي في المنطقة.',
                'content_en' => 'The idea of establishing the Arabian Yemen Cement Company Limited project in Mukalla came to meet the needs of consumers in the local and regional market. The project was initiated by Eng. Abdullah Ahmed Bugshan, a well-known businessman in Yemen and Saudi Arabia. Work began on 2/6/2006, with experimental production starting in December 2009.',
                'order' => 2,
            ],
            [
                'icon' => '📍',
                'title' => 'الموقع',
                'title_en' => 'Location',
                'content' => 'تقع الخطوط الإنتاجية للشركة العربية اليمنية للأسمنت وكذا مكاتبها الإدارية على بعد 60 كيلومتراً شمال مدينة المكلا عاصمة محافظة حضرموت في منطقة العيون بمساحة إجمالية تقدر ب 22.150 كيلومترٍ مربع، وقد تم اختيار الموقع لوجود مواد خام عمرها الإفتراضي طويل الأمد و بالنقاوة والنعومة الفائقة والصلابة واقتصادياً في البناء.',
                'content_en' => 'The production lines and administrative offices are located 60 km north of Mukalla, Hadhramaut, in the Al-Uyun area, covering 22,150 square kilometers. The site was chosen for its long-lasting, high-purity raw materials.',
                'order' => 3,
            ],
            [
                'icon' => '🧱',
                'title' => 'المنتجات',
                'title_en' => 'Products',
                'content' => 'يتمثل نشاط الشركة العربية اليمنية للأسمنت الرئيسي في إنتاج الإسمنت البورتلاندي العادي والمقاوم للكبريتات المعبأ والسائب وفقاً للمواصفات القياسية اليمنية والمطابق للمواصفات الأمريكية ASTM-C150 والأوربية EN197CEII، وقد أجتازت المنتجات بنجاح كافة الفحوصات المطلوبة من قبل الهيئة اليمنية للمواصفات والمقاييس وضبط الجودة.',
                'content_en' => 'The company’s main activity is the production of Ordinary Portland Cement and Sulfate-Resistant Cement, available in bags or bulk, conforming to Yemeni, American (ASTM-C150), and European (EN197CEII) standards.',
                'order' => 4,
            ],
            [
                'icon' => '📊',
                'title' => 'الطاقة الإنتاجية',
                'title_en' => 'Production Capacity',
                'content' => 'تقدر طاقة الشركة الإنتاجية من الإسمنت حوالي 1,500,000طن / لسنة.',
                'content_en' => 'The company’s cement production capacity is estimated at approximately 1,500,000 tons per year.',
                'order' => 5,
            ],
            [
                'icon' => '⚙️',
                'title' => 'التكنولوجيا',
                'title_en' => 'Technology',
                'content' => 'تمتلك الشركة العربية اليمنية للأسمنت أحدث الآلات والمعدات والأجهزة في عملياتها الإنتاجية والفنية ذات تقنية ألمانية متقدمة في صناعة الإسمنت وتوليد الطاقة وعمليات التحكم، لتحقيق الميزات النوعية للجودة المتميزة للإسمنت بإستخدام أحدث الأنظمة الحاسوبية وأجهزة التحكم الآلي (الروبوت) لأول مرة في صناعة الإسمنت، لضمان أعلى درجات الدقة والتحكم لجودة كافة عمليات إنتاج الإسمنت.',
                'content_en' => 'The company possesses the latest German-tech machinery and equipment for production and power generation. It uses advanced computer systems and robotic control for the first time in the cement industry to ensure maximum precision and quality.',
                'order' => 6,
            ],
        ];

        foreach ($sections as $section) {
            AboutCompanySection::create($section);
        }
    }
}
