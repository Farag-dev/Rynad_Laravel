<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.comingsoon');
// });

use App\Http\Controllers\BrevoController;

Route::get('/', function () {
    return view('frontend.comingsoon');
});

Route::post('/', [BrevoController::class, 'store'])->name('contact.store');
//blog_routs
Route::get('/blog','BLOGController@index')->name('Blog');
Route::get('/blogdetails/{id}','BLOGController@blogdetails')->name('Blogdetails');
Route::get('/Rynad_Home','BLOGController@Home_page')->name('home_user');
Route::post('/Rynad_Home','BLOGController@Home_page')->name('home_user');


//Contact_routs
Route::get('/Contact','CONTACTController@index')->name('contact');


//politique
Route::get('/confidentialité','POLITIQUE@index')->name('confidentialité');
Route::get('/Remboursement','POLITIQUE_REMB@index')->name('Remboursement');


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

});//adminauth
