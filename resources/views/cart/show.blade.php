<x-app-layout>
    <x-slot name="hero">
        <div class="w-full h-36 bg-gradient-to-r from-orange-100 to-orange-400 p-10">
            {{-- <div class="w-full h-full bg-hero"> --}}
        </div>
    </x-slot>

    <x-slot name="content">
        <div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">

            <div class="flex justify-between items-center">
                <h2>Mon Panier</h2>
            </div>

            <div class="relative divide-y-2 divide-gray-100 overflow-x-auto w-full">
                <table class="w-full text-sm text-left">
                    <thead class="text-xs700 uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-l-lg">
                                Nom du produit
                            </th>
                            <th scope="col" class="px-6 py-3">
                                quantité
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-r-lg">
                                Prix
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-r-lg">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        @php
                        // récupération des paniers dont le user_id correspond à l'id de l'utilisateur connecté
                            $carts = \App\Models\Cart::where('user_id', '=', Auth::user()->id)->get();;
                            // Données de tous les paniers du user (items) : dd($cart);

                            $totalQuantity = 0;
                            $totalPrice = 0;
                        @endphp

                        <!-- On parcourt la collection de Cart-->
                        @foreach ($carts as $cart)
                            <tr class="">
                                {{-- Nom du produit ("products.name")--}}
                                <th scope="row" class="px-6 py-4 font-medium">
                                    {{-- products() : récupération de la relation entre les modèles Cart et Product (recherche dans la table Cart)--}}
                                    {{-- pivot : recherche dans la table pivot cart_products --}}
                                    {{-- méthode first() : récupérer le premier produit associé à ce panier --}}
                                    {{$cart->products()->first()->name}}
                                </th>

                                {{-- Quantité ("cart_products.quantity")--}}
                                <td class="px-6 py-4">
                                    {{$cart->products()->first()->pivot->quantity}}
                                </td>

                                {{-- Prix total ("cart_products.total_price")--}}
                                <td class="px-6 py-4">
                                    {{$cart->products()->first()->pivot->total_price}} €
                                </td>

                                {{-- Action : supprimer le produit du panier --}}
                                <td class="px-6 py-4">
                                    <x-danger-button>
                                        Supprimer
                                    </x-danger-button>
                                </td>
                            </tr>

                            @php
                                $totalQuantity += $cart->products()->first()->pivot->quantity;
                                $totalPrice += $cart->products()->first()->pivot->total_price;
                            @endphp
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr class="font-semibold">
                            <th scope="row" class="px-6 py-3 text-base">Total</th>
                            <td class="px-6 py-3">{{$totalQuantity}}</td>
                            <td class="px-6 py-3">{{$totalPrice}} €</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-footer/>
    </x-slot>
</x-app-layout>