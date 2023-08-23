<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Affichage de tous les produits (dans la boutique)
    public function index()
    {
        //On récupère tous les produits
        $products = Product::latest()->get();

        // On transmet les produits à la vue
        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // On retourne la vue "/resources/views/products/edit.blade.php"
        return view("products.edit");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => 'bail|required|string|max:255',
            "picture" => 'bail|required|image|max:1024',
            "description" => 'bail|required',
            'price' => 'bail|required',
        ]);

        //upload l'image dans "/storage/app/public/products"
        $chemin_image = $request->picture->store("products");

        //enregistrement des infos du produit
        Product::create([
            "name" => $request->name,
            "picture" => $chemin_image,
            "description" => $request->description,
            "price" => $request->price,
        ]);

        //retour vers tous les produits : route("products.index")
        return redirect(route("products.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("products.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
