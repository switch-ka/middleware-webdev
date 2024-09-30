<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Other global middleware...
        \App\Http\Middleware\LogRequests::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            // Other middlewares...
            \App\Http\Middleware\LogRequests::class,
        ],
        'api' => [
            // Other middlewares...
            \App\Http\Middleware\LogRequests::class,
        ],
    ];
    
    protected $routeMiddleware = [
        // Other route-specific middleware...
        'checkAge' => \App\Http\Middleware\CheckAge::class,
    ];
    
}