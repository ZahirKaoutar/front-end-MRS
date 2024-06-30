<?php

use App\Http\Middleware\ChefMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgentmaritimeMiddleware;
use App\Http\Middleware\ClientMiddleware;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'Chef'=>ChefMiddleware::class,
            'Agentmaritime'=>AgentmaritimeMiddleware::class,
            'Client'=>ClientMiddleware::class
        ]);
      



    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
