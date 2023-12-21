<?php

use App\Http\Controllers\SiteComponentController;
use App\Http\Controllers\SiteInheritanceController;
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

Route::get('/site/inheritance', [SiteInheritanceController::class, 'home'])->name('site.inheritance.home');
Route::get('/site/inheritance/portfolio', [SiteInheritanceController::class, 'portfolio'])->name('site.inheritance.portfolio');
Route::get('/site/inheritance/about', [SiteInheritanceController::class, 'about'])->name('site.inheritance.about');
Route::get('/site/inheritance/contact', [SiteInheritanceController::class, 'contact'])->name('site.inheritance.contact');

Route::get('/site/component', [SiteComponentController::class, 'home'])->name('site.component.home');
Route::get('/site/component/portfolio', [SiteComponentController::class, 'portfolio'])->name('site.component.portfolio');
Route::get('/site/component/about', [SiteComponentController::class, 'about'])->name('site.component.about');
Route::get('/site/component/contact', [SiteComponentController::class, 'contact'])->name('site.component.contact');



Route::get('/', function () {
    return view('index', [
        'pagination' => true,
        'projects' => [
            [
                'active' => true,
                'image' => 'cabin.png'
            ],
            [
                'active' => true,
                'image' => 'cake.png'
            ],
            [
                'active' => true,
                'image' => 'circus.png'
            ],
            [
                'active' => false,
                'image' => 'game.png'
            ],
            [
                'active' => true,
                'image' => 'safe.png'
            ],
            [
                'active' => true,
                'image' => 'submarine.png'
            ]
        ]
    ]);
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

Route::get('/conditionals/if', function () {
    return view('examples.conditionals_if', [
        'comment' => -1
    ]);
});

Route::get('/conditionals/switch/{month}', function (int $month) {
    return view('examples.conditionals_switch', [
        'month' => ''
    ]);
});

