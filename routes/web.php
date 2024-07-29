<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrevoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('frontend.comingsoon');
});
/*
|--------------------------------------------------------------------------
| Brevo Routes
|--------------------------------------------------------------------------
*/
Route::post('/', [BrevoController::class, 'store'])->name('contact.store');
/*
|--------------------------------------------------------------------------
| Blog Routes for UserInterface
|--------------------------------------------------------------------------
*/
Route::get('/blog','BLOGController@index')->name('Blog');
Route::get('/blogdetails/{id}/{main_title?}','BLOGController@blogdetails')->name('Blogdetails');
Route::get('/Rynad_Home','BLOGController@Home_page')->name('home_user');
Route::post('/Rynad_Home','BLOGController@Home_page')->name('home_user');
/*
|--------------------------------------------------------------------------
| Contact Routes for UserInterface
|--------------------------------------------------------------------------
*/
Route::get('/Contact','CONTACTController@index')->name('contact');
Route::post('/send-form', 'CONTACTController@sendForm')->name('send-form');
/*
|--------------------------------------------------------------------------
| Policy Routes for UserInterface
|--------------------------------------------------------------------------
*/
Route::get('/confidentialité','POLITIQUE@index')->name('confidentialité');
Route::get('/Remboursement','POLITIQUE_REMB@index')->name('Remboursement');
/*
|--------------------------------------------------------------------------
| Admin Routes for Dashboard
|--------------------------------------------------------------------------
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix'=>'admin',
    'middleware'=>['auth']
] ,function(){
//admin_routs
Route::get('/','ADMINController@index')->name('admin_home');
//blog
Route::get('/addblog','BLOGController@add_blog')->name('add_blog');
Route::post('/storeblog','BLOGController@store')->name('store_blog');
Route::get('/ViewBlogs','BLOGController@blogs_Admin')->name('View_Blogs');
Route::get('/editblog/{id}','BLOGController@show')->name('show_editblog');
Route::put('/updateblog/{id}','BLOGController@update')->name('update_editblog');
Route::delete('/deleteblog/{id}','BLOGController@destroy')->name('delete_blog');

});
