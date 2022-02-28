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

Route::get('/', 'PagesController@index')->name('adib');
Route::get('/about', 'PagesController@about')->name('partho');
Route::get('/hospital', 'PagesController@hospital')->name('foysul');
Route::get('/doctor', 'PagesController@doctor')->name('doct');
Route::get('/ambulance', 'PagesController@ambulance')->name('red');

Route::post('/search', 'PagesController@search')->name('find');//hospital_search
Route::post('/doctorsearch', 'PagesController@doctorsearch')->name('searchdoc');
Route::post('/ambulancesearch', 'PagesController@ambulancesearch')->name('searchambulance');
Route::get('/covid19', 'PagesController@covid19')->name('virus');

//Route::get('/admin', 'AdminController@index')->name('admin1');
Route::get('/admin/createhospital', 'AdminController@createhospital')->name('admincreate');
Route::post('/admin/createhospital', 'AdminController@storehospital')->name('storehospital');

Route::get('/admin/adminedit', 'AdminController@edithospital')->name('edithospital');
Route::get('/admin/foysalhospital/{id}', 'AdminController@mainedithospital')->name('foysalhospital');
Route::post('/admin/adminmainedit/{id}', 'AdminController@updatehospital')->name('updatehospital');
Route::post('/admin/del/{id}', 'AdminController@deletehospital')->name('foysalhospitaldel');


Route::get('/admin/createdoctor', 'AdminController@createdoctor')->name('admincreatedoctor');
Route::post('/admin/createdoctor', 'AdminController@storedoctor')->name('storedoctor');

Route::get('/admin/editdoctor', 'AdminController@editdoctor')->name('editdoctor');
Route::get('/admin/showdoctor/{id}', 'AdminController@maineditdoctor')->name('showdoctor');
Route::post('/admin/updatedoctor/{id}', 'AdminController@updatedoctor')->name('updatedoctor');
Route::post('/admin/del1/{id}', 'AdminController@doctordelete')->name('deletedoctor');

Route::get('/admin/createambulance', 'AdminController@createambulance')->name('admincreateambulance');
Route::post('/admin/createambulance', 'AdminController@storeambulance')->name('storeambulance');

Route::get('/admin/editambulance', 'AdminController@editambulance')->name('editambulance');
Route::get('/admin/showambulance/{id}', 'AdminController@maineditambulance')->name('showambulance');
Route::post('/admin/updateambulance/{id}', 'AdminController@updateambulance')->name('updateambulance');
Route::post('/admin/del2/{id}', 'AdminController@ambulancedelete')->name('deleteamblance');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/index', 'HomeController@logout')->name('logout');