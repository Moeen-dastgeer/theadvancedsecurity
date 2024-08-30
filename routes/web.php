<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceboxController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\web\MyaccountController;
use App\Models\servicebox;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('run', function(){
   return Artisan::call('storage:link'); 
});

Route::group(['middleware'=>['auth:team'],'prefix'=>'admin','as'=>'admin.'], function (){
    Route::resource('users', TeamController::class);   
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

    Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');

    Route::get('/services/list', [ServiceController::class,'index'])->name('services.list');
    Route::get('/services/create', [ServiceController::class,'create'])->name('services.create');
    Route::post('/services/create', [ServiceController::class,'store'])->name('services.store');
    Route::get('/services/edit/{id}', [ServiceController::class,'edit'])->name('services.edit');
    Route::post('/services/update', [ServiceController::class,'update'])->name('services.update');
    Route::get('/services/delete/{id}', [ServiceController::class,'destroy'])->name('services.delete');
    
    Route::get('/web-setting/terms', [PageController::class,'terms'])->name('web_settings.terms');
    Route::post('/web-setting/terms-update', [PageController::class,'terms_update'])->name('web_settings.terms.update');

    Route::get('/web-setting/privacy', [PageController::class,'privacy'])->name('web_settings.privacy');
    Route::post('/web-setting/privacy_update', [PageController::class,'privacy_update'])->name('web_settings.privacy.update');
    
    
    
    //home
    Route::get('/web-setting/sections/list', [PageController::class,'sections'])->name('web_settings.sections.list');
    Route::get('/web-setting/sections/create', [PageController::class,'sections_create'])->name('web_settings.sections.create');
    Route::post('/web-setting/sections/store', [PageController::class,'sections_store'])->name('web_settings.sections.store');
    Route::get('/web-setting/sections/edit/{id}', [PageController::class,'sections_edit'])->name('web_settings.sections.edit');
    Route::post('/web-setting/sections/update', [PageController::class,'sections_update'])->name('web_settings.sections.update');
    Route::get('/web-setting/sections/delete/{id}', [PageController::class,'sections_delete'])->name('web_settings.sections.delete');
    
    
    
    Route::get('/counters/list', [PageController::class,'counters'])->name('counters.list');
    Route::get('/counters/create', [PageController::class,'counters_create'])->name('counters.create');
    Route::post('/counters/store', [PageController::class,'counters_store'])->name('counters.store');
    Route::get('/counters/edit/{id}', [PageController::class,'counters_edit'])->name('counters.edit');
    Route::post('/counters/update', [PageController::class,'counters_update'])->name('counters.update');
    Route::get('/counters/delete/{id}', [PageController::class,'counters_delete'])->name('counters.delete');
   
    
    
    
    Route::get('/contact-us', [ContactUsController::class,'index'])->name('web_settings.contact');
    Route::post('/contact-us', [ContactUsController::class,'update'])->name('web_settings.contact_store');

    Route::get('/sliders/list', [SliderController::class,'index'])->name('sliders.list');
    Route::get('/sliders/create', [SliderController::class,'create'])->name('sliders.create');
    Route::post('/sliders/store', [SliderController::class,'store'])->name('sliders.store');
    Route::get('/sliders/edit/{id}', [SliderController::class,'edit'])->name('sliders.edit');
    Route::get('/sliders/delete/{id}', [SliderController::class,'destroy'])->name('sliders.delete');
    Route::post('/sliders/update', [SliderController::class,'update'])->name('sliders.update');

    Route::get('/servicebox/list', [ServiceboxController::class,'index'])->name('servicebox.list');
    Route::get('/servicebox/create', [ServiceboxController::class,'create'])->name('servicebox.create');
    Route::post('/servicebox/store', [ServiceboxController::class,'store'])->name('servicebox.store');
    Route::get('/servicebox/edit/{id}', [ServiceboxController::class,'edit'])->name('servicebox.edit');
    Route::get('/servicebox/delete/{id}', [ServiceboxController::class,'destroy'])->name('servicebox.delete');
    Route::post('/servicebox/update', [ServiceboxController::class,'update'])->name('servicebox.update');

    Route::get('/team/list', [TeamMemberController::class,'index'])->name('team.list');
    Route::get('/team/create', [TeamMemberController::class,'create'])->name('team.create');
    Route::post('/team/store', [TeamMemberController::class,'store'])->name('team.store');
    Route::get('/team/edit/{id}', [TeamMemberController::class,'edit'])->name('team.edit');
    Route::get('/team/delete/{id}', [TeamMemberController::class,'destroy'])->name('team.delete');
    Route::post('/team/update', [TeamMemberController::class,'update'])->name('team.update');

    Route::get('/faqs/list', [FaqsController::class,'index'])->name('web_settings.faqs.list');
    Route::get('/faqs/create', [FaqsController::class,'create'])->name('web_settings.faqs.create');
    Route::post('/faqs/store', [FaqsController::class,'store'])->name('web_settings.faqs.store');
    Route::get('/faqs/delete/{id}', [FaqsController::class,'delete'])->name('web_settings.faqs.delete');
    Route::get('/faqs/edit/{id}', [FaqsController::class,'edit'])->name('web_settings.faqs.edit');
    Route::post('/faqs/update', [FaqsController::class,'update'])->name('web_settings.faqs.update');


    Route::get('/contact/list', [ContactController::class,'index'])->name('contact.list');
    Route::get('/contact/view/{id}', [ContactController::class,'view']);
    Route::get('contact/delete/{id}', [ContactController::class,'deleteContact']);
    Route::get('contact-ajax', [ContactController::class,'contact_ajax']);

    Route::post('/change-password', [AdminSettingController::class,'changePassword'])->name('settings.changepassword');
    Route::get('/change-password', [AdminSettingController::class,'changePassword'])->name('settings.changepassword')->middleware('password.confirm:admin.password.confirm');
    Route::post('/profile', [AdminSettingController::class,'profile'])->name('settings.profile');
    Route::get('/profile', [AdminSettingController::class,'profile'])->name('settings.profile')->middleware('password.confirm:admin.password.confirm');
});
require __DIR__.'/adminauth.php';


Route::group(['middleware'=>['auth:web','verified']], function (){
    Route::get('/myaccount', [MyaccountController::class,'index']);
});
require __DIR__.'/auth.php';


// Route::get('/contact-us', [ContactUsController::class,'contact']);
Route::post('/contact', [ContactUsController::class,'contact'])->name('contact');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::post('/join', [JoinController::class,'store']);
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/service/{slug}', [HomeController::class,'service'])->name('service');
Route::get('/join-our-team', [HomeController::class,'join_our_team'])->name('join-our-team');
Route::get('/privacy-policy', [HomeController::class,'policy'])->name('join-our-team');
Route::get('/terms-conditions', [HomeController::class,'terms'])->name('join-our-team');
Route::get('/', [HomeController::class,'index']);

