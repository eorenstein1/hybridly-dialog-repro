<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Stancl\Tenancy\Contracts\Tenant;

class Company extends Model implements Tenant
{
    /** Get the name of the key used for identifying the tenant. */
    public function getTenantKeyName(): string {
        return 'id';
    }

    /** Get the value of the key used for identifying the tenant. */
    public function getTenantKey() {
        return $this->id;
    }

    /** Get the value of an internal key. */
    public function getInternal(string $key) {
        return null;
    }

    /** Set the value of an internal key. */
    public function setInternal(string $key, $value) {

    }

    /** Run a callback in this tenant's environment. */
    public function run(callable $callback) {

    }

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
}
