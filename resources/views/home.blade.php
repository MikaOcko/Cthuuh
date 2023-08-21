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
        
                <div class="flex items-center justify-center w-full h-80 lg:w-1/2">
                    <img class="object-cover w-full h-full mx-auto rounded-md lg:max-w-2xl" src="../images/hero.png" alt="glasses photo">
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="content">
    </x-slot>

    <x-slot name="footer">
    </x-slot>

</x-app-layout>

