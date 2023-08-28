<?php

use App\Http\Controllers\Cart_productsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route simple
// Accueil
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

// Le mythe de Cthuuh
Route::get('/story', function () {
    return view('story');
});
// La boutique
Route::get('/shop', function () {
    return view('shop');
});

// Tableau de bord admin/user
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes ressource pour les produits
Route::resource("products", ProductController::class);

// Routes ressource pour le panier
Route::resource("cart", CartController::class);

// Routes ressource pour Cart_products
Route::resource("cartproducts", Cart_productsControllert::class);


// Routes du profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
