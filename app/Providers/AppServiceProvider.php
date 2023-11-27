<?php

namespace App\Providers;

use App\Services\Notes\Repositories\EloquentNoteRepository;
use App\Services\Notes\Repositories\NoteRepositoryInterface;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        $this->app->bind(NoteRepositoryInterface::class, EloquentNoteRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
