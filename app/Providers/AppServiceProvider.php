<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use App\Http\Responses\LogoutResponse;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentView;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse as LogoutResponseContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public $singletons = [
        \Filament\Http\Responses\Auth\Contracts\LoginResponse::class => \App\Http\Responses\LoginResponse::class,
        \Filament\Http\Responses\Auth\Contracts\RegistrationResponse::class => \App\Http\Responses\RegisterResponse::class,
    ];
    public function register(): void
    {
        $this->app->bind(LogoutResponseContract::class, LogoutResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // FilamentView::registerRenderHook(
        //     'panels::auth.login.form.after',
        //     fn (): string => Blade::render('@vite(\'resources/css/custom-login.css\')'),
        // );
        // FilamentView::registerRenderHook(
        //     'panels::auth.register.form.after',
        //     fn (): string => Blade::render('@vite(\'resources/css/custom-register.css\')'),
        // );
    }
}
