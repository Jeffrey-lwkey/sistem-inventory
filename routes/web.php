<?php

use App\Livewire\Categories\CategoryCreate;
use App\Livewire\Categories\CategoryEdit;
use App\Livewire\Categories\CategoryIndex;
use App\Livewire\Categories\CategoryShow;
use App\Livewire\Products\ProductCreate;
use App\Livewire\Products\ProductEdit;
use App\Livewire\Products\ProductIndex;
use App\Livewire\Products\ProductShow;
use App\Livewire\Roles\RoleCreate;
use App\Livewire\Roles\RoleEdit;
use App\Livewire\Roles\RoleIndex;
use App\Livewire\Roles\RoleShow;
use App\Livewire\Users\UserCreate;
use App\Livewire\Users\UserEdit;
use App\Livewire\Users\UserIndex;
use App\Livewire\Users\UserShow;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('dashboard', function () {
    return view('dashboard', [
        'productCount'  => Product::count(),
        'categoryCount' => Category::count(),
        // opsional:
        'totalStock'    => Product::sum('stock'),
    ]);
})->middleware(['auth','verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('users', UserIndex::class)->name('users.index');
    Route::get('users/create', UserCreate::class)->name('users.create');
    Route::get('users/{id}/edit', UserEdit::class)->name('users.edit');
    Route::get('users/{id}/show', UserShow::class)->name('users.show');

    // Product Route
    Route::get('products', ProductIndex::class)->name('products.index');
    Route::get('products/create', ProductCreate::class)->name('products.create');
    Route::get('products/{id}/edit', ProductEdit::class)->name('products.edit');
    Route::get('products/{id}/show', ProductShow::class)->name('products.show');

    // Category Route
    Route::get('categories', CategoryIndex::class)->name('categories.index');
    Route::get('categories/create', CategoryCreate::class)->name('categories.create');
    Route::get('categories/{id}/edit', CategoryEdit::class)->name('categories.edit');
    Route::get('categories/{id}/show', CategoryShow::class)->name('categories.show');

    Route::get('roles', RoleIndex::class)->name('roles.index');
    Route::get('roles/create', RoleCreate::class)->name('roles.create');
    Route::get('roles/{id}/edit', RoleEdit::class)->name('roles.edit');
    Route::get('roles/{id}/show', RoleShow::class)->name('roles.show');




    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});



require __DIR__.'/auth.php';
