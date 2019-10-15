//routing ini berfungsi untuk menghubungkan controller dengan view, routing ini
// kita tambahkan didalam folder routes/web.php dan tambahkan kode berikut :

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/','BooksController@index');

Route::get('back','BooksController@back');

Route::get('create','BooksController@create');

Route::post('insert', 'BooksController@insert');

Route::get('delete/{id}','BooksController@delete');

Route::get('edit/{id}','BooksController@edit');

Route::post('update/{id}', 'BooksController@update');

Route::get('read/{id}','BooksController@read');
