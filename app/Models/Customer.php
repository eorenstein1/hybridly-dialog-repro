<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

/**
 * @mixin IdeHelperCustomer
 */
class Customer extends Model
{
    use BelongsToTenant;

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
