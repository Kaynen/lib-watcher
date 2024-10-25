<?php

namespace RodrigoMariano\LumenApiLogger;

use Illuminate\Support\ServiceProvider;
use Monolog\Logger;

class LoggerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->configureMonologUsing(function ($monolog) {
            $apiUrl = env('LOG_API_URL', 'https://sua-api.com/logs');
            $monolog->pushHandler(new ApiLogHandler($apiUrl));
        });
    }
}
