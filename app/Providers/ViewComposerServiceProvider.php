<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                'employee.home',
                'employee.skills',
                'employee.missions',
                'employee.formations',
                'partials.resumes.resume-download',
                'admin.home',
                'company.home',
                'sale.home'
            ], 'App\Http\ViewComposers\ShareDataComposer'
        );

        View::composer('*', function($view) {
            $settings = Settings::first();
            $view->with(compact('settings'));
        });


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
