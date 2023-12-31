<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BelongTo extends Model
{
    use HasFactory;


    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function products() : BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
