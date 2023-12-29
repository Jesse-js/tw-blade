<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('components.layout', function ($view) {
            $view->with('menuItens', [
                [
                    'label' => 'Portfolio',
                    'url' => route('site.component.portfolio'),
                ],
                [
                    'label' => 'About',
                    'url' => route('site.component.about'),
                ],
                [
                    'label' => 'Contact',
                    'url' => route('site.component.contact'),
                ],
            ]);
        });

        View::composer('inheritance.layout', function ($view) {
            $view->with('menuItens', [
                [
                    'label' => 'Portfolio',
                    'url' => route('site.inheritance.portfolio'),
                ],
                [
                    'label' => 'About',
                    'url' => route('site.inheritance.about'),
                ],
                [
                    'label' => 'Contact',
                    'url' => route('site.inheritance.contact'),
                ],
            ]);
        });
    }
}
