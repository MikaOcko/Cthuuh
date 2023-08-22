<x-app-layout>
    <x-slot name="hero">
        <div class="w-full h-full text-white bg-gradient-to-r from-cyan-900 to-teal-900 p-10">
            {{-- <div class="w-full h-full bg-story"> --}}
                <div class="container flex flex-col px-6 py-10 mx-auto space-y-6">
                    <div class="w-full">
                        <div>
                            <h1>
                                Le mythe de Cthuuh
                            </h1>
                            
                            <div class="mt-8 space-y-5">
                                <p>
                                    Notre nom est une référence à l'univers de Lovecraft, et nous avons créé des boissons
                                    qui vous donneront une énergie surnaturelle pour affronter les défis de la vie quotidienne.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </x-slot>

    <x-slot name="content">
        {{-- Section 1 --}}
        <div class="container">
            <div class=" flex flex-col items-center justify-between m-8 p-2 gap-6 lg:flex-row">
                {{-- Photo d'illustration --}}
                <img src="../images/food.jpg"  class="object-cover w-full h-52 rounded-lg shadow-2xl" alt="photo d'illustration">
            
                {{-- Paragraphe --}}
                <div class="p-2">
                    <h2>
                        Des saveurs uniques
                    </h2>
                    <p>
                        Nous avons créé des saveurs uniques pour nos boissons énergisantes, inspirées des créatures et des lieux de l'univers de Lovecraft.
                        Essayez notre boisson "Innsmouth" pour une saveur marine rafraîchissante ou notre boisson tropicale “Summer edition”.
                    </p>
                </div>
            </div>
        </div>

        {{-- Section 2 --}}
        <div class="container">
            <div class=" flex flex-col items-center justify-between m-8 p-2 gap-6 lg:flex-row-reverse">
                {{-- Photo d'illustration --}}
                <img src="../images/fruit.jpg"  class="object-cover object-center w-full h-52 rounded-lg shadow-2xl" alt="photo d'illustration">
            
                {{-- Paragraphe --}}
                <div class="p-2">
                    <h2>
                        Des ingrédients de qualité
                    </h2>
                    <p>
                        Nous utilisons uniquement des ingrédients de qualité pour nos boissons énergisantes,
                        afin de vous donner une énergie durable sans les effets secondaires
                        négatifs de certaines boissons énergisantes sur le marché.
                    </p>
                </div>
            </div>
        </div>

        {{-- Section 3 --}}
        <div class="container">
            <div class=" flex flex-col items-center justify-between m-8 p-2 gap-6 lg:flex-row">
                {{-- Photo d'illustration --}}
                <img src="../images/story.png"  class="object-cover object-top w-full h-52 rounded-lg shadow-2xl" alt="photo d'illustration">
            
                {{-- Paragraphe --}}
                <div class="p-2">
                    <h2>
                        Un design unique
                    </h2>
                    <p>
                        Notre design est inspiré de l'univers de Lovecraft, avec des motifs
                        étranges et des couleurs sombres pour vous plonger dans l'ambiance.
                    </p>
                </div>
            </div>
        </div>





    </x-slot>

    <x-slot name="footer">
        <x-footer/>
    </x-slot>
</x-app-layout>