<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/',function() { return redirect()->route('login'); });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/event', [App\Http\Controllers\EventController::class, 'index']);
Route::get('/event/{id}', [App\Http\Controllers\EventController::class, 'show']);
Route::delete('/event/{id}', [App\Http\Controllers\EventController::class, 'destroy']);
Route::get('/event/{id}/edit', [\App\Http\Controllers\EventController::class, 'edit']); 
Route::put('/event/{id}/edit', [\App\Http\Controllers\EventController::class, 'update']);
Route::get('/Add-event', [App\Http\Controllers\EventController::class, 'addEvent']);
Route::post('/Add-event', [App\Http\Controllers\EventController::class, 'addnewEvent']);
Route::get('/offer', [App\Http\Controllers\OfferController::class, 'index']);


//banners route

Route::get('/banners', [App\Http\Controllers\BannerController::class, 'index']);
Route::post('/add-banner', [App\Http\Controllers\BannerController::class, 'addBanner']);
Route::post('/banner/delete/{id}', [App\Http\Controllers\BannerController::class, 'destroy']);
Route::get('/banner/{id}/edit', [\App\Http\Controllers\BannerController::class, 'edit']); 
Route::put('/banner/{id}/edit', [\App\Http\Controllers\BannerController::class, 'update']);


//offering route
Route::get('/project-offering', [App\Http\Controllers\OfferController::class, 'project']);
Route::get('/add-project-offer', [App\Http\Controllers\OfferController::class, 'projectform']);
Route::get('/add-brand-offer', [App\Http\Controllers\OfferController::class, 'brandform']);
Route::post('/addProjectOffer', [App\Http\Controllers\OfferController::class, 'addprojectoffer']);
Route::post('/addbrandOffer', [App\Http\Controllers\OfferController::class, 'addbrandoffer']);
Route::get('/brand-offering', [App\Http\Controllers\OfferController::class, 'brand']);

Route::get('/project-offer/{id}', [App\Http\Controllers\OfferController::class, 'showprojectoffer']);
Route::get('/brand-offer/{id}', [App\Http\Controllers\OfferController::class, 'showbrandoffer']);


Route::delete('/project-offer/{id}', [App\Http\Controllers\OfferController::class, 'deleteprojectoffer']);
Route::delete('/brand-offer/{id}', [App\Http\Controllers\OfferController::class, 'deletebrandoffer']);

Route::get('/project-offer/{id}/edit', [\App\Http\Controllers\OfferController::class, 'editprojectoffer']); 
Route::put('/project-offer/{id}/edit', [\App\Http\Controllers\OfferController::class, 'updateprojectoffer']);

Route::get('/brand-offer/{id}/edit', [\App\Http\Controllers\OfferController::class, 'editbrandoffer']); 
Route::put('/brand-offer/{id}/edit', [\App\Http\Controllers\OfferController::class, 'updatebrandoffer']);



