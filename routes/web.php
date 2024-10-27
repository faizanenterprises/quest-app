<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SINPCalculatorController;
use App\Http\Controllers\CalculatorController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/search', [PageController::class, 'index'])->name('search');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');
Route::get('/countrylist', [PageController::class, 'countrylist'])->name('countrylist');
Route::get('/caselist', [PageController::class, 'caselist'])->name('caselist');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/teamdetails', [PageController::class, 'teamdetails'])->name('teamdetails');
Route::get('/pricetable', [PageController::class, 'pricetable'])->name('pricetable');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/appointments', [PageController::class, 'appointments'])->name('appointments');
Route::get('/timeline', [PageController::class, 'timeline'])->name('timeline');
Route::get('/workprocess', [PageController::class, 'workprocess'])->name('workprocess');
Route::get('/partners', [PageController::class, 'partners'])->name('partners');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/comingsoon', [PageController::class, 'comingsoon'])->name('comingsoon');
Route::get('/404', [PageController::class, 'fourzerofour'])->name('fourzerofour');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/visalist', [PageController::class, 'visalist'])->name('visalist');
Route::get('/touristvisa', [PageController::class, 'touristvisa'])->name('touristvisa');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/servicedetails', [PageController::class, 'servicedetails'])->name('servicedetails');
Route::get('/service_tourist_visa', [PageController::class, 'service_tourist_visa'])->name('service_tourist_visa');
Route::get('/service_family_visa', [PageController::class, 'service_family_visa'])->name('service_family_visa');
Route::get('/service_student_visa', [PageController::class, 'service_student_visa'])->name('service_student_visa');
Route::get('/service_work_permit', [PageController::class, 'service_work_permit'])->name('service_work_permit');
Route::get('/service_business_visa', [PageController::class, 'service_business_visa'])->name('service_business_visa');
Route::get('/service_immigration', [PageController::class, 'service_immigration'])->name('service_immigration');

Route::get('/service_express_entry', [PageController::class, 'service_express_entry'])->name('service_express_entry');
Route::get('/service_pnp_program', [PageController::class, 'service_pnp_program'])->name('service_pnp_program');
Route::get('/service_quebec_program', [PageController::class, 'service_quebec_program'])->name('service_quebec_program');
Route::get('/service_startup_visa', [PageController::class, 'service_service_startup_visa'])->name('service_startup_visa');


Route::get('/private_policy', [PageController::class, 'private_policy'])->name('private_policy');

// Route::post('/send_email', [PageController::class, 'send_email'])->name('send_email');

Route::get('/bloglist', [BlogController::class, 'bloglist'])->name('bloglist');
Route::get('/blogdetails', [BlogController::class, 'blogdetails'])->name('blogdetails');
Route::get('/blog_studyabroad', [BlogController::class, 'blog_studyabroad'])->name('blog_studyabroad');
Route::get('/blog_top_universities', [BlogController::class, 'blog_top_universities'])->name('blog_top_universities');
Route::get('/blog_second_attempt', [BlogController::class, 'blog_second_attempt'])->name('blog_second_attempt');
Route::get('/blog_doc_spouse', [BlogController::class, 'blog_doc_spouse'])->name('blog_doc_spouse');

Route::post('/make_appointment', [AppointmentController::class, 'make_appointment'])->name('make_appointment');
Route::post('/send-email', [MessageController::class, 'sendEmail'])->name('send_email');



Route::get('/sinp-calculator', [CalculatorController::class, 'sinp'])->name('sinp.calculator');
Route::post('/sinp-calculator/calculate', [CalculatorController::class, 'sinp_calculate'])->name('sinp.calculate');

