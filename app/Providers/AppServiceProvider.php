<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

          // Chia sẻ biến $categories cho tất cả view
          view()->share('categories', Category::all());

    }
}
