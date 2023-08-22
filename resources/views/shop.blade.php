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
        
    </x-slot>

    <x-slot name="footer">
        <x-footer/>
    </x-slot>
</x-app-layout>