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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('desa');
// });

Route::get('/home', function () {
    return view('home');
});
// route::get('/', 'BlogkegiatanController@indexbaru');
// route::get('/', 'BlogkegiatanController@index0');
route::get('/', 'BlogController@index');
route::get('/isi-blog/{slug}','BlogController@isi_blog')->name('blog.isi');
// route::get('/artikel', function(){
//   return view('themplate_blog.artikel');
// });

route::group(['middleware' => 'auth'], function(){

  route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
  route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
  route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
  route::resource('/category', 'CategoryController');
  route::resource('/tag', 'TagController');
  route::resource('/post', 'PostController');
  route::resource('/user', 'UserController');
  route::resource('/kegiatan', 'KegiatanController');


});


Auth::routes();
//tampil_hapus
// Route::get('/home', 'HomeController@index')->name('home');
