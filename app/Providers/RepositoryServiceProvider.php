<?php

namespace App\Providers;

use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\ChildCategoryRepositoryInterface;
use App\Interfaces\SubCategoryRepositoryInterface;
use App\Interfaces\VendorRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\ChildCategoryRepository;
use App\Repositories\SubCategoryRepository;
use App\Repositories\VendorRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(SubCategoryRepositoryInterface::class, SubCategoryRepository::class);
        $this->app->bind(ChildCategoryRepositoryInterface::class, ChildCategoryRepository::class);
        $this->app->bind(VendorRepositoryInterface::class, VendorRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
