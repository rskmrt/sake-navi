<?php

namespace App\Providers;

use Facade\FlareClient\View;
use Illuminate\Support\ServiceProvider;
use Auth;
use App\Models\Base;
use App\Models\Taste;
use App\Models\Split;
use App\Models\Strength;
use App\Models\Technique;
use App\Models\Glass;
use App\Models\User;

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
        View()->composer('*', function($view){
            $user = Auth::user();
            $bases = Base::all();
            $glasses = Glass::all();
            $splits = Split::all();
            $strengths = Strength::all();
            $tastes = Taste::all();
            $techniques = Technique::all();

            $view
            ->with([
                'user' => $user,
                'bases' => $bases,
                'glasses' => $glasses,
                'splits' => $splits,
                'strengths' => $strengths,
                'tastes' => $tastes,
                'techniques' => $techniques
            ]);
        });
    }
}
