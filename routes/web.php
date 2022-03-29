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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/missionvison', function () {
    return view('mission');
});
Route::get('/courses', function () {
    return view('courses');
});
 
Route::get('/council', function () {
    return view('council');
});
 
Route::get('/bom', function () {
    return view('bom');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/noticeBoard', function () {
    return view('noticeBoard');
});