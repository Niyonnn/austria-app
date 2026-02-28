<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService; // Ensure you have created this class

class ProductServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Fix: Added '$' to this and corrected array syntax
        $this->app->singleton(ProductService::class, function ($app) {
            $products = [
                [
                    'id' => 1,
                    'name' => 'Apple',
                    'category' => 'Fruits',
                ],
                [
                    'id' => 2,
                    'name' => 'Carrot',
                    'category' => 'Vegetables',
                ],
                [
                    'id' => 3,
                    'name' => 'Banana',
                    'category' => 'Fruits',
                ],
            ];
            return new ProductService($products);
        });
    }

    public function boot(): void
    {
        // This shares 'productKey' with all Blade views
        view()->share('productKey', 'abc123');
    }
    
}