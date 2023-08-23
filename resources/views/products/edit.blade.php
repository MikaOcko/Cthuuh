<x-app-layout>
    <x-slot name="hero"/>

    <x-slot name="content">
        <h1>Ajouter un produit</h1>

        <!-- Le formulaire est géré par la route "products.store" -->
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" >

            <!-- Le token CSRF -->
            @csrf
            
            <p>
                <label for="name" >Nom du produit</label><br/>
                <input type="text" name="name" value="{{ old('name') }}"  id="name" placeholder="Nom du produit" >

                <!-- Le message d'erreur pour "name" -->
                @error("name")
                <div>{{ $message }}</div>
                @enderror
            </p>
            <p>
                <label for="picture" >Image du produit</label><br/>
                <input type="file" name="picture" id="picture" >

                <!-- Le message d'erreur pour "picture" -->
                @error("picture")
                <div>{{ $message }}</div>
                @enderror
            </p>
            <p>
                <label for="description" >Contenu</label><br/>
                <textarea name="description" id="description" lang="fr" rows="10" cols="50" placeholder="Description du produit" >{{ old('description') }}</textarea>

                <!-- Le message d'erreur pour "description" -->
                @error("description")
                <div>{{ $message }}</div>
                @enderror
            </p>

            <x-success-button>
                <input type="submit" name="valider" value="Valider" >
            </x-success-button>

        </form>
    </x-slot>

    <x-slot name="footer">
        <x-footer/>
    </x-slot>
</x-app-layout>