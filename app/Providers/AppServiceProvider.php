<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

     public function boot()
     {
         View::composer('*', function ($view) {
             if (Auth::check()) {
                 $unreadNotificationsCount = Notification::where('user_id', Auth::id())
                                                        ->where('is_read', false)
                                                        ->count();
                 $view->with('unreadNotificationsCount', $unreadNotificationsCount);
             }
         });
     }


}
