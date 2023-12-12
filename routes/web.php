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
    return view('index');
});

Route::get('/data', function () {
    return view('examples.data')->with([
        'name' => 'Treinaweb',
        'description' => 'Developers school'
    ]);
});


Route::get('/json', function () {
    return view('examples.show_json')->with([
        'posts' => [
            [
                'title' => 'Laravels news',
                'description' => 'Laravel is a free, open source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model'
            ],
            [
                'title' => 'Laravels news',
                'description' => 'Laravel is a free, open source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model'
            ]
        ]
    ]);
});

Route::get('/frameworks/js', function () {
    return view('examples.frameworks_js');
});

Route::get('/php/comments', function () {
    return view('examples.php_comments');
});
