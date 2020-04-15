<?php

use Illuminate\Support\Facades\Route;
use App\Section;
use App\Header;
use App\Service;
use App\User;

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
    $sections = Section::all();                              
    $headers = Header::all();
    $services = Service::all();
    $users = User::all();
    return view('index', compact('sections', 'headers', 'services', 'users'));
});

Route::get('/admin', function(){
    $headers = Header::all();
    $sections = Section::all();
    $services = Service::all();  
    $users = User::all();                   
    return view('admin.index', compact('sections', 'headers', 'services', 'users'));
})->name('admin');

Route::resource('/admin/section', 'SectionController'); 

Route::resource('/admin/header', 'HeaderController');

Route::resource('/admin/services', 'ServiceController');

Route::resource('/users', 'UserController');
