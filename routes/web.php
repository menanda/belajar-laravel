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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});


route::get('/home', function() {
    $listmahasiswa = [
        [
            "nama" => "Paul",
            "no_induk" => 123456789,
            "nilai" => 95
    
        ],
    
    [
            "nama" => "jaya",
            "no_induk" => 123456978,
            "nilai" => 85
    
        ],
        [
            "nama" => "sri",
            "no_induk" => 123456879,
            "nilai" => 93
    
        ],
        [
            "nama" => "jos",
            "no_induk" => 123456987,
            "nilai" => 91
    
        ],
        [
            "nama" => "mikel",
            "no_induk" => 123459876,
            "nilai" => 92
    
        ],
    ];
    $username= 'nanda';
    return view ('home',[
    'user' => $username,
    'usia' => 19,
    'ismember' => true,
    'grade' => 100,
    'datamahasiswa' => $listmahasiswa 
    ]);
});

