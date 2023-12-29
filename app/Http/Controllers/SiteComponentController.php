<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class SiteComponentController extends Controller
{
    public function home(string $lang = 'pt_BR'): View
    {
        App::setLocale($lang);
        return view('component.home');
    }

    public function portfolio(): View
    {
        $pagination = true;
        $projects = [
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
        ];

        return view('component.portfolio')
            ->with(['pagination' => $pagination, 'projects' => $projects]);
    }
    public function about(): View
    {
        return view('component.about');
    }

    public function contact(): View
    {
        return view('component.contact');
    }
}
