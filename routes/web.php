<?php

use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\BoardOfTrusteesController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ChairPersionController;
use App\Http\Controllers\backend\ContactController as BackendContactController;
use App\Http\Controllers\backend\DonateNowController;
use App\Http\Controllers\backend\EventNoticeController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\MissionVissionController;
use App\Http\Controllers\backend\NewsAndArticleController;
use App\Http\Controllers\backend\ServicesController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\SmallGalleryController;
use App\Http\Controllers\backend\StaffController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\backend\TopHeaderController;
use App\Http\Controllers\backend\VolunteerController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\OnlinePatientSerialController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\frontend\VolunteerRegiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


Route::middleware(['auth'])->group(function () {

    // User Contact

    Route::get('dashboard/contacts',[BackendContactController::class,'index'])->name('userContactList');
    Route::get('dashboard/contact/view/{id}',[BackendContactController::class,'show'])->name('userSingleContactView');
    Route::get('dashboard/contact/status/{id}',[BackendContactController::class,'toggleStatus'])->name('toggleStatus');
    Route::delete('dashboard/contact/delete/{id}',[BackendContactController::class,'destroy'])->name('userSingleContactDestroy');

    // Top Header
    Route::get('dashboard/top-header',[TopHeaderController::class,'index'])->name('topHeader');
    Route::post('dashboard/top-header/save',[TopHeaderController::class,'store'])->name('storeTopHeader');
    Route::get('dashboard/top-header/edit/{id}',[TopHeaderController::class,'edit'])->name('editTopHeader');
    Route::post('dashboard/top-header/update/{id}',[TopHeaderController::class,'update'])->name('updateTopHeader');
    Route::delete('dashboard/top-header/delete/{id}',[TopHeaderController::class,'destroy'])->name('deleteTopHeader');

    // Slider
    Route::get('dashboard/slider',[SliderController::class,'index'])->name('slider');
    Route::post('dashboard/slider/save',[SliderController::class,'store'])->name('storeSlider');
    Route::delete('dashboard/slider/delete/{id}',[SliderController::class,'destroy'])->name('deleteSlider');

    // Event Notice
    Route::get('dashboard/event-notice',[EventNoticeController::class,'index'])->name('eventNotice');
    Route::get('dashboard/event-notice/create',[EventNoticeController::class,'create'])->name('createEventNotice');
    Route::get('dashboard/event-notice/view/{id}',[EventNoticeController::class,'view'])->name('viewEventNotice');
    Route::post('dashboard/event-notice/save',[EventNoticeController::class,'store'])->name('storeEventNotice');
    Route::get('dashboard/event-notice/edit/{id}',[EventNoticeController::class,'edit'])->name('editEventNotice');
    Route::post('dashboard/event-notice/update/{id}',[EventNoticeController::class,'update'])->name('updateEventNotice');
    Route::delete('dashboard/event-notice/delete/{id}',[EventNoticeController::class,'destroy'])->name('deleteEventNotice');

    // About Us
    Route::get('dashboard/about-us',[AboutUsController::class,'index'])->name('aboutUs');
    Route::get('dashboard/about-us/create',[AboutUsController::class,'create'])->name('createAboutUs');
    Route::get('dashboard/about-us/view/{id}',[AboutUsController::class,'view'])->name('viewAboutUs');
    Route::post('dashboard/about-us/save',[AboutUsController::class,'store'])->name('storeAboutUs');
    Route::get('dashboard/about-us/edit/{id}',[AboutUsController::class,'edit'])->name('editAboutUs');
    Route::post('dashboard/about-us/update/{id}',[AboutUsController::class,'update'])->name('updateAboutUs');
    Route::delete('dashboard/about-us/delete/{id}',[AboutUsController::class,'destroy'])->name('deleteAboutUs');

    
    // Mission Vission
    Route::get('dashboard/mission-vission',[MissionVissionController::class,'index'])->name('missionVission');
    Route::get('dashboard/mission-vission/create',[MissionVissionController::class,'create'])->name('createMissionVission');
    Route::get('dashboard/mission-vission/view/{id}',[MissionVissionController::class,'view'])->name('viewMissionVission');
    Route::post('dashboard/mission-vission/save',[MissionVissionController::class,'store'])->name('storeMissionVission');
    Route::get('dashboard/mission-vission/edit/{id}',[MissionVissionController::class,'edit'])->name('editMissionVission');
    Route::post('dashboard/mission-vission/update/{id}',[MissionVissionController::class,'update'])->name('updateMissionVission');
    Route::delete('dashboard/mission-vission/delete/{id}',[MissionVissionController::class,'destroy'])->name('deleteMissionVission');

    // Chairman
    Route::get('dashboard/chairperson',[ChairPersionController::class,'index'])->name('chairperson');
    Route::get('dashboard/chairperson/create',[ChairPersionController::class,'create'])->name('createChairPerson');
    Route::get('dashboard/chairperson/view/{id}',[ChairPersionController::class,'view'])->name('viewChairPerson');
    Route::post('dashboard/chairperson/save',[ChairPersionController::class,'store'])->name('storeChairPerson');
    Route::get('dashboard/chairperson/edit/{id}',[ChairPersionController::class,'edit'])->name('editChairPerson');
    Route::post('dashboard/chairperson/update/{id}',[ChairPersionController::class,'update'])->name('updateChairPerson');
    Route::delete('dashboard/chairperson/delete/{id}',[ChairPersionController::class,'destroy'])->name('deleteChairPerson');

    // Service 
    Route::get('dashboard/service',[ServicesController::class,'index'])->name('krctService');
    Route::get('dashboard/service/create',[ServicesController::class,'create'])->name('createService');
    Route::get('dashboard/service/view/{id}',[ServicesController::class,'view'])->name('viewService');
    Route::post('dashboard/service/save',[ServicesController::class,'store'])->name('storeService');
    Route::get('dashboard/service/edit/{id}',[ServicesController::class,'edit'])->name('editService');
    Route::post('dashboard/service/update/{id}',[ServicesController::class,'update'])->name('updateService');
    Route::delete('dashboard/service/delete/{id}',[ServicesController::class,'destroy'])->name('deleteService');

    // Gallry 
    Route::get('dashboard/gallery',[GalleryController::class,'index'])->name('backendGllery');
    Route::get('dashboard/gallery/create',[GalleryController::class,'create'])->name('createGallery');
    Route::get('dashboard/gallery/view/{id}',[GalleryController::class,'view'])->name('viewGallery');
    Route::post('dashboard/gallery/save',[GalleryController::class,'store'])->name('storeGallery');
    Route::get('dashboard/gallery/edit/{id}',[GalleryController::class,'edit'])->name('editGallery');
    Route::post('dashboard/gallery/update/{id}',[GalleryController::class,'update'])->name('updateGallery');
    Route::delete('dashboard/gallery/delete/{id}',[GalleryController::class,'destroy'])->name('deleteGallery');


    // Category Controller 
    Route::get('dashboard/category',[CategoryController::class,'index'])->name('category');
    Route::get('dashboard/category/create',[CategoryController::class,'create'])->name('createCategory');
    Route::post('dashboard/category/store',[CategoryController::class,'store'])->name('storeCategory');
    Route::delete('dashboard/category/delete/{id}',[CategoryController::class,'destroy'])->name('deleteCategory');


        
    // Event Notice
    Route::get('dashboard/news-and-articles',[NewsAndArticleController::class,'index'])->name('newsAndArticles');
    Route::get('dashboard/news-and-articles/create',[NewsAndArticleController::class,'create'])->name('createNewsAndArticles');
    Route::get('dashboard/news-and-articles/view/{id}',[NewsAndArticleController::class,'view'])->name('viewNewsAndArticles');
    Route::post('dashboard/news-and-articles/save',[NewsAndArticleController::class,'store'])->name('storeNewsAndArticles');
    Route::get('dashboard/news-and-articles/edit/{id}',[NewsAndArticleController::class,'edit'])->name('editNewsAndArticles');
    Route::post('dashboard/news-and-articles/update/{id}',[NewsAndArticleController::class,'update'])->name('updateNewsAndArticles');
    Route::delete('dashboard/news-and-articles/delete/{id}',[NewsAndArticleController::class,'destroy'])->name('deleteNewsAndArticles');

        
    // Volunteer

    Route::get('dashboard/volunteer',[VolunteerController::class,'index'])->name('volunteerBackend');
    Route::get('dashboard/volunteer/view/{id}',[VolunteerController::class,'show'])->name('viewVolunteerSingle');
    Route::get('dashboard/volunteer/status/{id}',[VolunteerController::class,'toggleStatus'])->name('toggleStatusVolunteerSingle');
    Route::delete('dashboard/volunteer/delete/{id}',[VolunteerController::class,'destroy'])->name('volunteerSingleDestroy');


    // Donate Now Section
    Route::get('dashboard/donate-now',[DonateNowController::class,'index'])->name('donateNow');
    Route::get('dashboard/donate-now/create',[DonateNowController::class,'create'])->name('createDonateNow');
    Route::get('dashboard/donate-now/view/{id}',[DonateNowController::class,'view'])->name('viewDonateNow');
    Route::post('dashboard/donate-now/save',[DonateNowController::class,'store'])->name('storeDonateNow');
    Route::get('dashboard/donate-now/edit/{id}',[DonateNowController::class,'edit'])->name('editDonateNow');
    Route::post('dashboard/donate-now/update/{id}',[DonateNowController::class,'update'])->name('updateDonateNow');
    Route::delete('dashboard/donate-now/delete/{id}',[DonateNowController::class,'destroy'])->name('deleteDonateNow');

    // Testimonial
    Route::get('dashboard/testimonial',[TestimonialController::class,'index'])->name('testimonial');
    Route::get('dashboard/testimonial/create',[TestimonialController::class,'create'])->name('createTestimonial');
    Route::get('dashboard/testimonial/view/{id}',[TestimonialController::class,'view'])->name('viewTestimonial');
    Route::post('dashboard/testimonial/save',[TestimonialController::class,'store'])->name('storeTestimonial');
    Route::get('dashboard/testimonial/edit/{id}',[TestimonialController::class,'edit'])->name('editTestimonial');
    Route::post('dashboard/testimonial/update/{id}',[TestimonialController::class,'update'])->name('updateTestimonial');
    Route::delete('dashboard/testimonial/delete/{id}',[TestimonialController::class,'destroy'])->name('deleteTestimonial');


    // Small Footer Gallery 
    Route::get('dashboard/footer-gallery',[SmallGalleryController::class,'index'])->name('smallGallery');
    Route::get('dashboard/footer-gallery/create',[SmallGalleryController::class,'create'])->name('createSmallGallery');
    Route::get('dashboard/footer-gallery/view/{id}',[SmallGalleryController::class,'view'])->name('viewSmallGallery');
    Route::post('dashboard/footer-gallery/save',[SmallGalleryController::class,'store'])->name('storeSmallGallery');
    Route::get('dashboard/footer-gallery/edit/{id}',[SmallGalleryController::class,'edit'])->name('editSmallGallery');
    Route::post('dashboard/footer-gallery/update/{id}',[SmallGalleryController::class,'update'])->name('updateSmallGallery');
    Route::delete('dashboard/footer-gallery/delete/{id}',[SmallGalleryController::class,'destroy'])->name('deleteSmallGallery');



    // Board Of Trustees
    Route::get('dashboard/board-of-trustees',[BoardOfTrusteesController::class,'index'])->name('bot');
    Route::get('dashboard/board-of-trustees/create',[BoardOfTrusteesController::class,'create'])->name('createBOT');
    Route::get('dashboard/board-of-trustees/view/{id}',[BoardOfTrusteesController::class,'view'])->name('viewBOT');
    Route::post('dashboard/board-of-trustees/save',[BoardOfTrusteesController::class,'store'])->name('storeBOT');
    Route::get('dashboard/board-of-trustees/edit/{id}',[BoardOfTrusteesController::class,'edit'])->name('editBOT');
    Route::post('dashboard/board-of-trustees/update/{id}',[BoardOfTrusteesController::class,'update'])->name('updateBOT');
    Route::delete('dashboard/board-of-trustees/delete/{id}',[BoardOfTrusteesController::class,'destroy'])->name('deleteBOT');


    // Board Of Trustees
    Route::get('dashboard/staff',[StaffController::class,'index'])->name('krctStaff');
    Route::get('dashboard/staff/create',[StaffController::class,'create'])->name('createStaff');
    Route::get('dashboard/staff/view/{id}',[StaffController::class,'view'])->name('viewStaff');
    Route::post('dashboard/staff/save',[StaffController::class,'store'])->name('storeStaff');
    Route::get('dashboard/staff/edit/{id}',[StaffController::class,'edit'])->name('editStaff');
    Route::post('dashboard/staff/update/{id}',[StaffController::class,'update'])->name('updateStaff');
    Route::delete('dashboard/staff/delete/{id}',[StaffController::class,'destroy'])->name('deleteStaff');
    
});





Route::post('/contact',[ContactController::class,'submitUserData'])->name('submitUserData');

Route::post('/volunteer-registration-submit',[VolunteerRegiController::class,'store'])->name('storeVolunteerRegi');



// ================================= FRONTEND STARTED ===================================================================

Route::get('/donation',[PageController::class,'donation'])->name('donation');

Route::get('/contact',[PageController::class,'contact'])->name('contact');

Route::get('/event',[PageController::class,'event'])->name('event');

Route::get('/gallery',[PageController::class,'gallery'])->name('gallery');

Route::get('/medical-corner',[PageController::class,'medical_corner'])->name('medical_corner');

Route::get('/news',[PageController::class,'news'])->name('news');

Route::get('/services',[PageController::class,'services'])->name('services');

Route::get('/staff',[PageController::class,'staff'])->name('staff');

Route::get('/student',[PageController::class,'student'])->name('student');

Route::get('/trustees',[PageController::class,'trustees'])->name('trustees');

Route::get('/volunteer',[PageController::class,'volunteer'])->name('volunteer');

Route::get('/volunteer-registration',[PageController::class,'volunteer_regi'])->name('volunteer_regi');

// ================================= FRONTEND END =======================================================================


// ==================================== Patient Online Serial No. ===================================

    Route::get('/medical-corner/get-online-serial',[OnlinePatientSerialController::class,'index'])->name('onlineSerialIndex');
    Route::get('/medical-corner/get-online-serial/patient-serial-show/{id}',[OnlinePatientSerialController::class,'patientSerialShow'])->name('patientSerialShow');
    Route::post('/medical-corner/get-online-serial/booking/',[OnlinePatientSerialController::class,'submitData'])->name('storeDataMakeSerial');


// ==================================== Patient Online Serial No. End ===============================







