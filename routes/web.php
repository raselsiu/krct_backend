<?php

use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\ChairPersionController;
use App\Http\Controllers\backend\ContactController as BackendContactController;
use App\Http\Controllers\backend\EventNoticeController;
use App\Http\Controllers\backend\MissionVissionController;
use App\Http\Controllers\backend\ServicesController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\TopHeaderController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\PageController;
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
    
});





























Route::post('/contact',[ContactController::class,'submitUserData'])->name('submitUserData');

// ================================= FRONTEND STARTED ===================================================================

Route::get('/donation',[PageController::class,'donation'])->name('donation');

Route::get('/contact',[PageController::class,'contact'])->name('contact');

Route::get('/event',[PageController::class,'event'])->name('event');

Route::get('/gallery',[PageController::class,'gallery'])->name('gallery');

Route::get('/medical_corner',[PageController::class,'medical_corner'])->name('medical_corner');

Route::get('/news',[PageController::class,'news'])->name('news');

Route::get('/services',[PageController::class,'services'])->name('services');

Route::get('/staff',[PageController::class,'staff'])->name('staff');

Route::get('/student',[PageController::class,'student'])->name('student');

Route::get('/trustees',[PageController::class,'trustees'])->name('trustees');

Route::get('/volunteer',[PageController::class,'volunteer'])->name('volunteer');

Route::get('/volunteer_regi',[PageController::class,'volunteer_regi'])->name('volunteer_regi');

// ================================= FRONTEND END =======================================================================







