<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'street_number',
        'street_name',
        'area_code',
        'city',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relation avec la table 'roles' : un tuilisateur possède un rôle (par défaut : 1 (user))
    public function role():BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    // Relation avec la table 'orders" : un utilisateur peut avoir plusieurs commandes
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }


    // Relations OneToMany avec le panier avec une contrainte d'unicité sur 'user_id'
    // public function carts(): HasMany
    // {
    //     return $this->hasMany(Cart::class)->withDefault();
    // }
}
