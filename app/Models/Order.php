<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price',
        'payment_status'
    ];

    // Relation avec la table 'users' : une commande appartient à un tuilisateur
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec la table 'products' : une commande contient un ou plusieurs produits
    // public function products(): HasOneOrMany
    // {
    //     return $this->hasOneOrMany(Product::class, 'belongTo')
    //     ->withPivot('quantity');
    // }
    // => Passer par un taable associative : BelongTo
    public function belongTo(): HasOne
    {
        return $this->hasOne(BelongTo::class);
    }
}
