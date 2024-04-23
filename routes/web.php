<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\MessageCategoryController;
use App\Http\Controllers\SermonCategoryController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('index');
});


//routes for donate
Route::get('/donate', function(){
    return view('donation');
})->name('donate');


//routes for sermon
Route::get('/sermons', function(){
    return view('sermon');
})->name('sermon');


//routes for calendar or events
Route::get('/calendar', function(){
    return view('calendar');
})->name('calendar');


//route for about us
Route::get('/aboutTCRC', function(){
    return view('about_us');
})->name('aboutUs');


//route for about us
Route::get('/slideShow', function(){
    return view('photos');
})->name('photos');


//routes for testimonies
Route::get('/testimonies', function(){
    return view('testimonies');
})->name('testimonies');