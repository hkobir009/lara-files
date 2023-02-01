<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();

        if (Schema::hasTable('categories')) {
            $globalCategories = Category::with([
                'childrenCategories' => function ($query) {
                    $query
                        ->withCount([
                            'childrenCategories',
                        ])
                        ->latest('order_level');
                }
            ], [
                'childrenCategories.childrenCategories' => function ($query) {
                    $query->latest('order_level');
                }
            ])
                ->withCount([
                    'childrenCategories',
                ])
                ->where('parent_id', 0)
                ->latest('order_level')
                ->get();

            View::share('globalCategories', $globalCategories);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
