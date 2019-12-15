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
//get , put, post,patch,delete,options  =http
//laravel=redirect,permanentRedirect,view,any,match,middleware,group
Route::get('/', 'showpostcontroller@index');

Route::get('welcome/', function () {
    return "bangladesh ";
});
Route::redirect('welcome/{n?}', function ($k="dhaka") {
    return "bangladesh ".$k;
});
Route::get('about/','kazicontroller@do');
Route::get(md5('dshfkjjimkdhfhks'),function(){
    return view('welcome');
})->name('jim');

Route::get('about/',function(){
    return view('about');
});

Route::get(md5('studentlkfklh'),'kazicontroller@tablefun')->name('student');

Route::get('home/','kazicontroller@do');




//Route::get('home/',)

// Route::group(['middleware' => ['age']], function () {
//     Route::get('about/', function () {
//         return view('about');
//     });

//     Route::get('student/',function(){
//         return view('student.stuid');
//     });
    
// });

Route::get('thisiswritepostpage','kazicontroller@writepost')->name('gopost');
 Route::get('thisiscatagory','kazicontroller@addcatagory')->name ('addcatagory');
 Route::get('thisisallcatagory','kazicontroller@allcatagory')->name('allcatagory');

 //databse send
 Route::post('thisisallcatagorys','kazicontroller@catagorys')->name('catagorys');
 Route::post('poststor','postcontroller@storepost')->name('storepost');
 Route::get('poststor','postcontroller@allpost')->name('allpost');

 Route::get('view/viewcat/{id}','kazicontroller@viewcat');
Route::get('delete/post/allcata/{id}','kazicontroller@viewallcata');

Route::get('edit/allcata/{id}', 'kazicontroller@editcata');
Route::post('update/editcata/{id}','kazicontroller@updatecata');
Route::get('viewpost/{id}','postcontroller@viewpost')->name('viewpost');
Route::get('editwritepost/{id}','postcontroller@editwritepost');
Route::post('updatepost/{id}','postcontroller@updatepost');
Route::get('deletepost/{id}','postcontroller@deletepost');