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

//Sintaks di atas akan sama dengan sintaks di bawah
//Closure artinya url ini ditulis langsung di dalam route web
//Jika ada Routing\ViewController, artinya url diatur dalam ViewController
//Kemudahan laravel: bila pakai resource, maka pada routing cukup buat satu line routing (memiliki arti CRUD)
//Penulisan URL bebas
Route::resource('medicines', 'MedicineController');
Route::resource('categories', 'MedicineController');


Route::view('/', 'home');

//foo is URL, function() is callback
Route::get('foo', function() {
    return "Hello Program";
});

Route::get('/helloworld', function(){
    return "Hello World, Pak Dosen";
});

Route::get('user/{id}', function($id){
    return 'User '.$id;
});

//Required Parameter
Route::get('posts/{post}/comments/{comment}', function($postId, $commentId){
    return "Post $postId, Comment $commentId";
});

//Optional Parameter (provide default value if user not completing the syntax)
Route::get('user/{name?}', function($name = 'John'){
    return $name;
});

//Calling a route with an alias
//Dipanggil pada saat ingin menulis <a href=...>
//Tidak wajib ada, membantu jika URI-nya buanyak
Route::get('user/{id}/profile', function($id){
    return view('welcome');
})->name('profile');

Route::get('greeting', function(){
    //Parsing value/controller ke sebuah view
    //Seperti kantor pos yg membungkus data
    return view('welcome', ['name' => "Samantha"]);
});

// 1. / --> berisi nama toko + logo
// 2. /catalog --> berisi pilihan obat dan alkes
// 3. /catalog/medicines --> list obat
// 4. /catalog/med_equip --> list medical eqip
// 5. /medicines/1 --> detail obat ber-id 1
// 6. /equipments/1 --> detail obat ber-id 1

Route::get('catalog', function(){
    return view('catalog');
})->name('catalog');

Route::get('catalog/medicines', function(){
    return view('catalog', ["type" => "Medicines"]);
});

Route::get('catalog/equipments', function(){
    return view('catalog', ["type" => "Medical Equipments"]);
})->name('equipments');

Route::get('/medicine/{id}', function($id){
    return view('detailcatalog', ["type" => "Medicines", "id" => $id]);
});

Route::get('/equipment/{id}', function($id){
    return view('detailcatalog', [ "type" => "Medical Equipments", "id" => $id]);
});

Route::get('aboutus', function(){
    return view('aboutus');
})->name('aboutus');

Route::get('/report/listmedicine/{id}', 'CategoryController@showlist')->name('reportShowMedicine');
