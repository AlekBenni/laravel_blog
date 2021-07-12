<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.sidebar', function($view){
            if(Cache::has('cats')){
                $cats = Cache::get('cats');
            }else{
                $cats = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
                Cache::put('cats', $cats, 30);
            }
            $view->with('popular_posts', Post::orderBy('view', 'desc')->limit(3)->get());
            $view->with('cats', $cats);
        });
    }
}
