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
                            <p>
                                Découvrez la toute nouvelle boisson énergisante Cthuuh en édition limitée.
                                Un concentré des tropiques avec son goût exotique et fruité.
                                Offrez-vous un coup de boost pour affronter vos journées - et soirées - chaudes.
                            </p>
                            <x-primary-button>
                                <a href="{{url('/shop')}}" target="_blank" rel="noopener noreferrer">            
                                    Découvrir
                                </a>
                            </x-primary-button>
                        </div>
                    </div>
                </div>
        
                <div class="flex items-center justify-center w-80 h-80 lg:w-1/2">
                    <img class="object-cover w-full h-full mx-auto rounded-md lg:max-w-2xl" src="../images/can-summer-2.jpg" alt="photo de la Cthuuh édition limitée">
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="content">
        {{-- Section "Nos produits" --}}
        <section class=" flex flex-col items-center justify-center">
            <h2 class="py-5 my-10">
                Nos produits
            </h2>

            <div class="flex flex-col gap-6 lg:flex-row lg:gap-6  ">
                {{-- Produit 1 --}}
                <div class="bg-white rounded-xl border border-gray-300 shadow-2xl p-10 max-w-xs">
                    <img src="../images/can-original.jpg"  class="object-cover" alt="logo du produit Cthuuh original">
                </div>

                {{-- Produit 2 --}}
                <div class="bg-white rounded-xl border border-gray-300 shadow-2xl p-10 max-w-xs">
                    <img src="../images/can-zero.jpg"  class="object-cover" alt="logo du produit Cthuuh zero">
                </div>

                {{-- Produit 3 --}}
                <div class="bg-white rounded-xl border border-gray-300 shadow-2xl p-10 max-w-xs">
                    <img src="../images/can-innersmouth.jpg"  class="object-cover" alt="logo du produit Cthuuh Innersmouth">
                </div>
            </div>

            <x-primary-button class="my-10">
                <a href="{{url('/shop')}}" target="_blank" rel="noopener noreferrer">            
                    Découvrir la boutique
                </a>
            </x-primary-button>
        </section>

        {{-- Section "Le mythe de Cthuuh" --}}
        <section class="w-full h-full text-white bg-gradient-to-r from-cyan-900 to-teal-900 p-10">
            <div class="container flex flex-col items-center justify-center gap-9">
                <h2 class="p-2">
                    Le mythe de Cthuuh
                </h2>
    
                <p class="p-2 px-10">
                    Chez Cthuuh, nous embrassons cette énergie surnaturelle et lui donnons vie dans nos produits.
                    Nos boissons énergisantes vous donneront le pouvoir d'affronter l'inconnu et de vaincre vos peurs.
                    Alors venez, rejoignez-nous dans ce voyage au-delà du domaine de la perception humaine.
                </p>
    
                <x-secondary-button class="p-2">
                    <a href=" {{url('/story')}}" target="_blank" rel="noopener noreferrer">                    
                        Découvrir le mythe
                    </a>
                </x-secondary-button>
            </div>
        </section>
    </x-slot>

    <x-slot name="footer">
        <x-footer/>
    </x-slot>

</x-app-layout>

