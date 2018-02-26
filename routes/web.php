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
Route::get('/index', function () {
    return view('pages.index');
})->name('index');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');





Route::post('/contact', function () {

    $data = request()->all();

    echo "Email: ".$data['email'] . '<br>';
    echo "Body: ".$data['body'];
});


Route::get('/signup', function () {
    return view('pages.signup');
});


Route::get('/signin', function () {
    return view('pages.signin');
});


Route::get('/viewmessages', function () {
    return view('pages.viewmessages');
});


Route::get('/bscontact', function () {
    return view('pages.bscontact');
});