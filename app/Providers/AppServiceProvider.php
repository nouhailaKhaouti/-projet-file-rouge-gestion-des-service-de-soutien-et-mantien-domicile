<?php

namespace App\Providers;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
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
    public function boot(): void
    {
        //
        Schema::defaultStringLength(191);
        $permissions = Permission::all();

        $adminRole = Role::findByName('Admin');
        $adminRole->syncPermissions($permissions);
            app(PermissionRegistrar::class)->registerPermissions();
    }
}
