<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByPath;

Route::get('/', function () {
    return hybridly('welcome');
});

Route::group([
    'prefix' => '/app/{tenant}',
    'middleware' => [InitializeTenancyByPath::class]
], function () {
    Route::get('/customers/{customer}', function (Customer $customer) {
        return hybridly('customers.show', ['customer' => $customer]);
    })->name('customers.show');

    Route::get('/customers/{customer}/edit', function (Customer $customer) {
        return hybridly('customers.edit', ['customer' => $customer])->base(route('customers.show', ['customer' => $customer, 'tenant' => tenant('id')]));
    })->name('customers.edit');
});
