<?php

use Illuminate\Support\Facades\Route;

    Route::get('/hello', function () {
        return 'Hello World';
    });
    Route::get('/world', function () {
        return 'World';
    });
    // Route untuk halaman utama (root)
    Route::get('/', function () {
    return 'Selamat Datang';
    });

    // Route untuk halaman about
    Route::get('/about', function () {
    return 'NIM : 244107020104 <br> Nama : Mochamad Reza Firsaus';
    });

    Route::get('/posts/{post}/comments/{comment}',
        function ($postId, $commentId) {
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

    Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
    });

    Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
    });


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