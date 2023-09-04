<?php

namespace Tests\Unit;

use Tests\TestCase;

// use PHPUnit\Framework\TestCase;
use App\Models\Product;
use App\Models\User;

class CartTest extends TestCase
{

    //accès au panier lorsque l'utilisateur est connecté
    public function the_user_can_access_to_the_cart($response, $user)
    {
        // authentification de l'utilisateur
        $user = User::factory()->create();
        $this->actingAs($user);

        // accès à la route du panier
        $response = $this->get('/cart');

        // Vérifier que la réponse est réussie
        $response->assertStatus(200);
    }

    //ajout d'un produit dans le panier lorsque l'utilisateur est connecté

}
