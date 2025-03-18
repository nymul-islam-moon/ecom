<?php

namespace App\Providers;

use App\Interfaces\Admin\AttributeRepositoryInterface;
use App\Interfaces\Admin\BrandRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\ChildCategoryRepositoryInterface;
use App\Interfaces\SubCategoryRepositoryInterface;
use App\Interfaces\VendorRepositoryInterface;
use App\Repositories\Admin\AttributeRepository;
use App\Repositories\Admin\BrandRepository;
use App\Repositories\Admin\VendorRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ChildCategoryRepository;
use App\Repositories\SubCategoryRepository;
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
        $this->app->bind(BrandRepositoryInterface::class, BrandRepository::class);
        $this->app->bind(AttributeRepositoryInterface::class, AttributeRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
