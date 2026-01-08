<?php

use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\Admin\AboutUs\AboutCompanyController;
use App\Http\Controllers\Admin\AboutUs\CertificatesController;
use App\Http\Controllers\Admin\AboutUs\FuturePlansController;
use App\Http\Controllers\Admin\AboutUs\ManagementController;
use App\Http\Controllers\Admin\AboutUs\SocialResponsibilityController;
use App\Http\Controllers\Admin\AboutUs\VisionAndMessageController;
use App\Http\Controllers\Admin\General\CategoriesController;
use App\Http\Controllers\Admin\General\PagesController;
use App\Http\Controllers\Admin\HumanResouces\EmployeeAdvantagesController;
use App\Http\Controllers\Admin\HumanResouces\InternshipRequestController;
use App\Http\Controllers\Admin\HumanResouces\JobApplicaitonController;
use App\Http\Controllers\Admin\HumanResouces\VisitController;
use App\Http\Controllers\Admin\MediaCenter\DocumentsController;
use App\Http\Controllers\Admin\MediaCenter\NewsController;
use App\Http\Controllers\Admin\MediaCenter\PhotosGalaryController;
use App\Http\Controllers\Admin\MediaCenter\VideosController;
use App\Http\Controllers\Admin\SalesAndMarketing\HadhramiController;
use App\Http\Controllers\Admin\SalesAndMarketing\ProductsController;
use App\Http\Controllers\Admin\SalesAndMarketing\CustomerServiceController;
use App\Http\Controllers\Admin\Home\StartUpController;
use App\Http\Controllers\Admin\ContactUs\ContactUsAdminController;
use App\Http\Controllers\Admin\ExternalLinks\ExternalLinksController;
use App\Http\Controllers\Admin\Users\UsersManagementtController;
use App\Http\Controllers\ContentManagementController;
use App\Http\Controllers\StartPage;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AboutUs;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HumanResourcesController;
use App\Http\Controllers\MediaCenterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SustainableDevelopmentController;
use App\Http\Controllers\WebsiteManagementController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\FormSubmissionController;


use Laravel\Pail\ValueObjects\Origin\Console;

if (! function_exists('localizedRoute')) {
function localizedRoute($name, $parameters = [], $absolute = true)
{
    $locale = app()->getLocale();

    // Convert string parameters to array
    if (is_string($parameters)) {
        $parameters = [$parameters];
    }

    // For lang.switch route, we need both locale and lang parameters
    if ($name === 'lang.switch') {

        if (isset($parameters['lang'])) {
            $langParam = $parameters['lang'];
        } else {
            $langParam = 'ar';
        }
        return route($name, ['locale' => $locale, 'lang' => $langParam], $absolute);
    }
    $parameters = array_merge(['locale' => $locale], $parameters);
    return route($name, $parameters, $absolute);
}
}

// Default route to redirect to a specific locale
Route::get('/', function () {
    $locale = Session::get('locale') ?? app()->getLocale();
    return redirect($locale);
});

Route::group([
    'prefix' => '{locale}',
    'middleware' => ['SetLocale'], // custom locale middleware is applied here
], function () {

    Route::prefix('Admin-Panel')->group(function () {
        Auth::routes();
    });

            Route::prefix('Admin-Panel')->middleware(['auth'])->group(function () {

                Route::get('/Dashboard', [HomeController::class, 'index'])->name('home');

                Route::prefix('/Post')->middleware(['auth'])->group(function () {
                    Route::put('/Activation/{id}', [PostController::class, 'activation'])->name('post.activation');
                    Route::delete('/Media-delete/{id}', [PostController::class, 'mediaDestroy'])->name('media.destroy');

                });
                Route::prefix('/Media-Center')->middleware(['auth'])->group(function () {
                    Route::resource('news', NewsController::class);
                    Route::resource('photos', PhotosGalaryController::class);
                    Route::resource('videos', VideosController::class);
                    Route::resource('categories', CategoriesController::class);
                    Route::resource('documents',DocumentsController::class);
                    Route::get('show-file/{id}', [DocumentsController::class, 'show'])->name('file.show');
                });
                Route::prefix('/About-Us')->middleware(['auth'])->group(function () {
                    Route::resource('about-company', AboutCompanyController::class);
                    Route::resource('management-board', ManagementController::class);
                    Route::resource('vision-and-message',VisionAndMessageController::class);
                    Route::resource('future-plans',FuturePlansController::class);
                    Route::resource('social-reponsibility', SocialResponsibilityController::class);
                    Route::resource('prizes-and-certificates', CertificatesController::class);
                });
                Route::prefix('/Sales-And-Marketing')->middleware(['auth'])->group(function () {
                    Route::resource('hadhrami', HadhramiController::class);
                    Route::resource('products', ProductsController::class);
                    Route::resource('customer-service', CustomerServiceController::class);
                });
                Route::prefix('/Human-Resources')->middleware(['auth'])->group(function () {
                    Route::resource('employee-advantages', EmployeeAdvantagesController::class);
                    Route::resource('job-application', JobApplicaitonController::class);
                    Route::resource('ask-for-visit', VisitController::class);
                    Route::resource('internship-request',InternshipRequestController::class);
                });

                Route::resource('home-page', StartUpController::class);
                Route::resource('contactus-page', ContactUsAdminController::class);
                Route::resource('external-links', ExternalLinksController::class);
                Route::middleware(['SuperAdmin'])->group(function () {
                    Route::resource('users-management', UsersManagementtController::class);
                    Route::put('users-management/{users_management}/toggle-active', [UsersManagementtController::class, 'toggleActive'])->name('users-management.toggleActive');
                });

                Route::put('pages/{id}', [PagesController::class, 'update'])->name('pages.update');
                Route::get('/change-password', [UsersManagementtController::class, 'changePasswordIndex'])->name('change-password.index');
                Route::post('change-password', [UsersManagementtController::class, 'changePassword'])->name('change-password');

                // Route::prefix('/users-management')->middleware(['auth'])->group(function () {
                //     Route::resource('users-data', UsersManagementController::class);
                //     Route::resource('users-privileges', UsersManagementController::class);
                // });

                Route::get('/account-settings', [AccountSettingsController::class, 'accountSettings'])->name('accountSettings');

                Route::group(['prefix' => '/website-management'], function () {
                    Route::get('/website-variables', [WebsiteManagementController::class, 'variables'])->name('webmgt.website_variables');
                    Route::get('/website-logs', [WebsiteManagementController::class, 'logs'])->name('webmgt.website_logs');
                });

                Route::group(['prefix' => '/content-management'], function () {
                    Route::get('/home', [ContentManagementController::class, 'index'])->name('content.home');
                    Route::get('/about-us', [ContentManagementController::class, 'aboutUs'])->name('content.aboutUs');
                    Route::get('/sales-and-marketing', [ContentManagementController::class, 'index'])->name('content.salesAndManagement');
                    Route::get('/human-resources', [ContentManagementController::class, 'index'])->name('content.humanResources');
                    Route::get('/media-center', [ContentManagementController::class, 'index'])->name('content.mediaCenter');
                    Route::get('/contact-us', [ContentManagementController::class, 'index'])->name('content.contactUs');
                });

            });




    Route::get('/', [StartPage::class, 'index'])->name('welcome');
    Route::get('/lang/{lang}', action: [LanguageController::class, 'switchLang'])->name('lang.switch');

    //  من نحن
    Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');
    Route::get('/management', [AboutUsController::class, 'managementIndex'])->name('management');
    Route::get('/visionIndex', [AboutUsController::class, 'visionIndex'])->name('visionIndex');
    Route::get('/futureplans', [AboutUsController::class, 'futurePlansIndex'])->name('futureplans');
    Route::get('/socialresponsibility', [AboutUsController::class, 'socialResponsibilityIndex'])->name('socialresponsibility');
    Route::get('/certificates', [AboutUsController::class, 'certificatesIndex'])->name('certificates');

    //  التسويق والمبيعات
    Route::get('/hadrami', [SalesController::class, 'hadramiIndex'])->name('hadrami');
    Route::get('/products', [SalesController::class, 'productsIndex'])->name('products');
    Route::get('/customerservice', [SalesController::class, 'customerserviceIndex'])->name('customerservice');
    // Route::get('/suggestionsandcomplaints', [SalesController::class, 'suggestionsandcomplaintsIndex'])->name('suggestionsandcomplaints');
    // Route::get('/productdetails', [SalesController::class, 'details'])->name('productsdetails');
    // Route::get('/view-document/{filename}', function ($locale , $filename) {
    //     // $path = storage_path('app/public/files/products/' . $filename);
    //     $path = public_path('files\products/' . $filename);
    //     // dd($path);
    //     if (!file_exists($path)) {
    //         abort(404);
    //     }
    //     return response()->file($path, [
    //         'Content-Type' => 'application/pdf',
    //         'Content-Disposition' => 'inline; filename="' . $filename . '"'
    //     ]);
    // })->name('viewpdf');
    // Route::get('/view-pdf/{filename}', [SalesController::class, 'viewPdf'])->name('view.pdf');



    // الموارد البشرية
    Route::get('/employeesAdvantages', [HumanResourcesController::class, 'employeesAdvantagesIndex'])->name('employeesAdvantages');
    Route::get('/jobApplication', [HumanResourcesController::class, 'jobApplicationIndex'])->name('jobApplication');
    Route::get('/askForVisit', [HumanResourcesController::class, 'askForVisitIndex'])->name('askForVisit');
    Route::get('/Internship-Request', [HumanResourcesController::class, 'askForTrainingIndex'])->name('askForTraining');



    //  المركز الاعلامي
    Route::get('/newsAndActivities', [MediaCenterController::class, 'newsAndActivitiesIndex'])->name('newsAndActivities');
    Route::get('/News/{id}/{slug}', [MediaCenterController::class, 'newsShowIndex'])->name('News.show');
    Route::get('/photosGalary', [MediaCenterController::class, 'photosGalaryIndex'])->name('photosGalary');
    Route::get('/videos', [MediaCenterController::class, 'videosIndex'])->name('videos');
    Route::get('/documents', [MediaCenterController::class, 'documentsIndex'])->name('documents');

    //  التنمية المستدامة
    // Route::get('/sustainableDevelopment', [SustainableDevelopmentController::class, 'index'])->name('sustainableDevelopment');

    //  تواصل بنا
    Route::get('/contactus', [ContactUsController::class, 'index'])->name('contactus');

    // Public form submissions (emails)
    Route::post('/forms/ask-visit', [FormSubmissionController::class, 'submitVisit'])->name('forms.askVisit');
    Route::post('/forms/ask-training', [FormSubmissionController::class, 'submitTraining'])->name('forms.askTraining');
});
