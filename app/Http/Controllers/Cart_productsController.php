<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart_products;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cart_productsController extends Controller
{

    // Ajouter un produit dans la panier
    public function addToCart(Request $request, $id)
    {
        // Ajout seulement si l'utilisateur est connecté
        if (Auth::id()) {

            // Données de l'utilisateur (attributes) : dd($user);
            $user = Auth::user();

            if ($user) {
                // Données du produit (attributes) : dd($product);
                $product = Product::find($id);

                // Nouveau panier
                $cart = new Cart();
                $cart->user_id = $user->id;
                $cart->save(); // Sauvegarder le panier pour obtenir un ID

                // Nouvelle class pivot associée au nouveau panier
                $cart_product = new Cart_products();
                $cart_product->cart_id = $cart->id;
                $cart_product->product_id = $product->id;
                $cart_product->total_price = $product->price * $request->quantity;
                $cart_product->quantity = $request->quantity;
                $cart_product->save(); // Sauvegarder la classe pivot

                return redirect()->back();
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }

    // Supprimer un produit du panier
    public function deleteToCart()
    {
        // 
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart_products $cart_products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart_products $cart_products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart_products $cart_products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart_products $cart_products)
    {
        //
    }
}
