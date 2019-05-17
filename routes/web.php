<?php

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

Route::get('/', [
    'uses'  =>  'WorkshopController@index',
    'as'    =>  '/'
]);

Route::get('/blog-detail/{id}/{name}', [
    'uses'  =>  'WorkshopController@blogDetail',
    'as'    =>  'blog-detail'
]);

Route::get('/author', [
    'uses'  => 'AuthorController@index',
    'as'    => 'author'
]);

Route::post('/author/new-author', [
    'uses'  => 'AuthorController@newAuthor',
    'as'    => 'new-author'
]);

Route::get('/attendance/attendance-info', [
    'uses'  => 'AttendanceController@index',
    'as'    => 'attendance'
]);

Route::get('/attendance/search-attendance', [
    'uses'  => 'AttendanceController@searchAttendance',
    'as'    => 'search-attendance'
]);

Route::post('/attendance/new-search-attendance', [
    'uses'  => 'AttendanceController@newSearchAttendance',
    'as'    => 'new-search-attendance'
]);

Route::post('/attendance/new-attendance', [
    'uses'  => 'AttendanceController@newAttendance',
    'as'    => 'new-attendance'
]);

Route::get('/blog/add-new-blog', [
    'uses'  => 'BlogController@index',
    'as'    => 'add-blog'
]);

Route::post('/blog/new-blog', [
    'uses'  => 'BlogController@newBlog',
    'as'    => 'new-blog'
]);

Route::get('/blog/manage-blog', [
    'uses'  => 'BlogController@manageBlog',
    'as'    => 'manage-blog'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
