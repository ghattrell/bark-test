<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use App\Guestbook\Response\Handler\Success as SuccessHandler;
use App\Guestbook\Response\Handler\ServerError as ServerErrorHandler;
use App\Guestbook\Response\Handler\ClientError as ClientErrorHandler;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('SuccessHandler', function () {
            return new SuccessHandler;
        });

        App::bind('ServerErrorHandler', function () {
            return new ServerErrorHandler;
        });

        App::bind('ClientErrorHandler', function () {
            return new ClientErrorHandler;
        });
    }
}
