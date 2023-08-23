<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view("products.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //validation

        // Les règles de validation pour "name" et "description"
        $rules = [
            'name' => 'bail|required|string|max:255',
            "description" => 'bail|required',
            'price' => 'bail|required',
        ];

        // Si une nouvelle image est envoyée
        if ($request->has("picture")) {
            // On ajoute la règle de validation pour "picture"
            $rules["picture"] = 'bail|required|image|max:1024';
        }

        $this->validate($request, $rules);

        // upload l'image dans "/storage/app/public/products"
        if ($request->has("picture")) {

            //On supprime l'ancienne image
            Storage::delete($product->picture);

            $chemin_image = $request->picture->store("products");
        }

        // MAJ des infos du produit
        $product->update([
            "name" => $request->name,
            "picture" => isset($chemin_image) ? $chemin_image : $product->picture,
            "description" => $request->description,
            'price' => $request->price
        ]);

        // affichage du produit modifié : route("products.show")
        return redirect(route("products.show", $product));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //supprime l'image existant
        Storage::delete($product->picture);

        // supprime les informations du produit
        $product->delete();

        // Redirection route "products.index"
        return redirect(route('products.index'));
    }
}
