<x-app-layout>
	<x-slot name="hero">
		<div class="w-full h-80 bg-gradient-to-r from-orange-100 to-orange-400 p-10">
        {{-- <div class="w-full h-full bg-hero"> --}}
                
        </div>
	</x-slot>
	
	<x-slot name="content">
		<section>
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
				<div class="flex flex-col md:flex-row -mx-4">
						<div class="md:flex-1 px-4">
							<div x-data="{ image: 1 }" x-cloak>
								<div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
			
									{{-- Photo 1 --}}
									<div x-show="image === 1" class="h-64 md:h-80 rounded-lg mb-4 flex items-center justify-center">
										<img src="{{ asset('storage/'.$product->picture) }}" alt="Image du produit" style="max-width: 300px;">
									</div>
									
									{{-- Photo 2 --}}
									{{-- <div x-show="image === 2" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
										<span class="text-5xl">2</span>
									</div> --}}
									
									{{-- Photo 2 --}}
									{{-- <div x-show="image === 3" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
										<span class="text-5xl">3</span>
									</div> --}}
									
									{{-- Photo 4 --}}
									{{-- <div x-show="image === 4" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
										<span class="text-5xl">4</span>
									</div> --}}
								</div>
					
								<div class="flex -mx-2 mb-4">
									<template x-for="i in 4">
										<div class="flex-1 px-2">
											<button x-on:click="image = i" :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }" class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
												<span x-text="i" class="text-2xl"></span>
											</button>
										</div>
									</template>
								</div>
							</div>
						</div>

				  		<div class="md:flex-1 px-4">
							{{-- Nom du produit --}}
							<h3 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
								{{$product->name}}
							</h3>

							{{-- Prix du produit --}}
							<div class="flex items-center space-x-4 my-4">
								<div>
									<div class="rounded-lg bg-gray-100 flex py-2 px-3">
										<span class="font-bold text-green text-3xl">{{$product->price}}</span>
										<span class="text-green mr-1 mt-1">€</span>
									</div>
								</div>

								{{-- Réduction --}}
								{{-- <div class="flex-1">
									<p class="text-green-500 text-xl font-semibold">Save 12%</p>
									<p class="text-gray-400 text-sm">Inclusive of all Taxes.</p>
								</div> --}}
							</div>
					
							{{-- Description du produit --}}
							<p class="text-gray-500">
								{{ $product->description }}
							</p>
			
							<div class="flex py-4 space-x-4">

								{{-- Quantité: sélectionner un chiffre --}}
								<div class="relative">
									<div class="text-center left-0 pt-2 right-0 absolute block text-xs uppercase tracking-wide font-semibold">
										Quantité
									</div>

									<select class="cursor-pointer appearance-none rounded-lg border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1 w-32">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
					  
					  			{{-- Bouton "Ajouter au panier" --}}
					  			<x-success-button class="h-14 px-6 py-2">
									Ajouter au panier
								</x-success-button>
							</div>
				  		</div>
				</div>

				<x-primary-button>
					<a href="{{ url('/shop') }}" title="Retourner aux produits" >Retourner aux produits</a>
				</x-primary-button>
			</div>
		</section>
	</x-slot>

	<x-slot name="footer">
		<x-footer/>
	</x-slot>
</x-app-layout>


