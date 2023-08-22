<x-app-layout>
    <x-slot name="hero" >
        <div class="w-full h-full bg-gradient-to-r from-orange-100 to-orange-400">
        {{-- <div class="w-full h-full bg-hero"> --}}
            <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1>
                            Découvrez l'énergie tropicale de la Summer edition.
                        </h1>
                        
                        <div class="mt-8 space-y-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <x-primary-button>
                                <a href="{{url('/shop')}}" target="_blank" rel="noopener noreferrer">            
                                    Découvrir
                                </a>
                            </x-primary-button>
                        </div>
                    </div>
                </div>
        
                <div class="flex items-center justify-center w-80 h-80 lg:w-1/2">
                    <img class="object-cover w-full h-full mx-auto rounded-md lg:max-w-2xl" src="../images/hero.png" alt="glasses photo">
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="content">
        <div class=" flex flex-col items-center justify-center">

            <h2 class="py-5 my-10">
                Nos produits
            </h2>

            <div class="flex flex-col gap-6 lg:flex-row lg:gap-6  ">
                {{-- Produit 1 --}}
                <div class="bg-white rounded-xl border border-gray-300 shadow-2xl p-10 max-w-xs">
                    <img src="../images/original.png"  class="object-cover" alt="logo du produit Cthuuh original">
                </div>

                {{-- Produit 2 --}}
                <div class="bg-white rounded-xl border border-gray-300 shadow-2xl p-10 max-w-xs">
                    <img src="../images/zero.png"  class="object-cover" alt="logo du produit Cthuuh zero">
                </div>

                {{-- Produit 3 --}}
                <div class="bg-white rounded-xl border border-gray-300 shadow-2xl p-10 max-w-xs">
                    <img src="../images/innersmouth.png"  class="object-cover" alt="logo du produit Cthuuh Innersmouth">
                </div>
            </div>

            <x-primary-button class="my-10">
                <a href="{{url('/shop')}}" target="_blank" rel="noopener noreferrer">            
                    Découvrir la boutique
                </a>
            </x-primary-button>
        </div>






    </x-slot>

    <x-slot name="footer">
    </x-slot>

</x-app-layout>

