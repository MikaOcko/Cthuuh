<x-app-layout>
    <x-slot name="hero">
        <div class="w-full h-full bg-gradient-to-r from-orange-100 to-orange-400 p-10">
        {{-- <div class="w-full h-full bg-hero"> --}}
            <div class="container flex flex-col px-6 py-10 mx-auto space-y-6">
                <div class="w-full">
                    <div>
                        <h1>
                            Bienvenue dans le monde de Cthuuh, où l'inimaginable devient réalité.
                        </h1>
                            
                        <div class="mt-8 space-y-5">
                             <p>
                                Nous vous proposons une gamme de boissons énergisantes qui éveilleront vos sens et vous transporteront
                                dans un royaume au-delà de la compréhension humaine.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="content">
        <section>
            <div class="container px-5 py-24 mx-auto">
                {{-- Récupération des données de la liste des produits --}}
                @php
                    $products = \App\Models\Product::all();
                @endphp

                <div class="flex flex-wrap gap-9">
                    <!-- Affichage de tous les produits-->
                    @foreach ($products as $product)
                        <div class="bg-white rounded-xl border border-gray-300 shadow-2xl p-10 h-52 w-52">
                            {{-- Image du produit--}}
                            <div>
                                <!-- Lien pour afficher le produit : "products.show" -->
                                <a href="{{ route('products.show', $product) }}">
                                    <img src="{{ asset('storage/'.$product->picture) }}" alt="{{$product->name}}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </x-slot>
</x-app-layout>