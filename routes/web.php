<?php

use Illuminate\Support\Facades\Route;
use App\Services\Localization\LocalizationService;
use Spatie\Permission\Contracts\Role;

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

// // Auth routes
// Auth::routes();

// Front side rotes vith localization
Route::namespace('App\Http\Controllers')
    ->prefix(LocalizationService::locale()) // uz ru en
    ->middleware(['setLocale'])
    ->group(function () {
        Route::get('', 'LegalworldController@index')->name('legalworld.main');
        Route::get('about', 'LegalworldController@about')->name('legalworld.about');
        Route::get('services', 'LegalworldController@services')->name('legalworld.services');
        Route::get('service-details/{number}', 'LegalworldController@serviceDetails')->name('legalworld.service-details');
        Route::get('privacy', 'LegalworldController@privacy')->name('legalworld.privacy');
        Route::get('contact', 'LegalworldController@contact')->name('legalworld.contact');
        Route::post('contact2', 'LegalworldController@contact2')->name('legalworld.contact2');
    }
);
