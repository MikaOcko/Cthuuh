<section>
    <div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
        <div class="flex justify-between items-center">
            <h2>Gestion des produits</h2>

            <x-success-button class="my-6">
                <!-- Lien pour créer un nouvel article : "products.create" -->
                <a href="{{ route('products.create') }}" title="Ajouter un produit" >
                    Ajouter un produit
                </a>
            </x-success-button>
        </div>

        <ul class="divide-y-2 divide-gray-100 overflow-x-auto w-full">
            {{-- Récupération des données de la liste des produits --}}
            @php
                $products = \App\Models\Product::all();
            @endphp
            <!-- On parcourt la collection de Product-->
            @foreach ($products as $product)
                <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">

                    <p class="px-4 font-semibold">
                        <a href="{{ route('products.show', $product) }}" title="Voir le produit" >{{ $product->name }}</a>
                    </p>

                    <div>
                        <!-- Lien pour modifier un product : "products.edit" -->
                        <x-success-button>
                            <a href="{{ route('products.edit', $product) }}" title="Modifier le produit" >
                                Modifier
                            </a>
                        </x-success-button>

                        <!-- Formulaire pour supprimer un product : "products.destroy" -->
                        <x-danger-button>
                            <form method="POST" action="{{ route('products.destroy', $product) }}" >
                                <!-- CSRF token -->
                                @csrf
                                <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                @method("DELETE")
                                <input type="submit" value="Supprimer" >
                            </form>
                        </x-danger-button>

                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
