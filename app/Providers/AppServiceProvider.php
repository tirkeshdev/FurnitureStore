<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use Laravel\Sanctum\Sanctum;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Sanctum::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        Facades\View::composer('app.nav', function (View $view) {
            $categories = Category::where('parent_id', null)
                ->withCount('child')
                ->get();

            $categorySubs = [];
            foreach ($categories as $category) {
                $categorySubs[] = [
                    'category' => $category,
                    'subs' => Category::where('parent_id', $category->id)
                        ->withCount('products')
                        ->get(),
                ];
            }
            $view->with([
               'categorySubs' => $categorySubs
            ]);
        });
    }
}
