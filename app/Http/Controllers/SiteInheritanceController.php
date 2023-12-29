<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteInheritanceController extends Controller
{
    public function home(): View
    {
        return view('inheritance.home');
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

        return view('inheritance.portfolio')
            ->with(['pagination' => $pagination, 'projects' => $projects]);
    }
    public function about(): View
    {
        return view('inheritance.about');
    }

    public function contact(): View
    {
        return view('inheritance.contact');
    }
}
