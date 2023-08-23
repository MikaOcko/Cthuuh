    <section>
        <h1>Ajouter un produit</h1>

        <!-- Le formulaire est géré par la route "products.store" -->
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" >

            <!-- Le token CSRF -->
            @csrf
            {{-- Nom du produit --}}
            <p>
                <label for="name" >Nom du produit</label><br/>
                <input type="text" name="name" value="{{ old('name') }}"  id="name" placeholder="Nom du produit" >

                <!-- Le message d'erreur pour "name" -->
                @error("name")
                <div>{{ $message }}</div>
                @enderror
            </p>

            {{-- Image--}}
            <p>
                <label for="picture" >Image du produit</label><br/>
                <input type="file" name="picture" id="picture" >

                <!-- Le message d'erreur pour "picture" -->
                @error("picture")
                <div>{{ $message }}</div>
                @enderror
            </p>

            {{-- Description du produit --}}
            <p>
                <label for="description" >Description du produit</label><br/>
                <textarea name="description" id="description" lang="fr" rows="10" cols="50" placeholder="Description du produit" >{{ old('description') }}</textarea>

                <!-- Le message d'erreur pour "description" -->
                @error("description")
                <div>{{ $message }}</div>
                @enderror
            </p>

            {{-- Prix --}}
            <p>
                <label for="price" >Prix unitaire</label><br/>
                <input type="number" name="price" id="price" value="{{ old('price') }}" placeholder="Prix">

                <!-- Le message d'erreur pour "erreur" -->
                @error("price")
                <div>{{ $message }}</div>
                @enderror
            </p>

            <x-success-button>
                <input type="submit" name="valider" value="Valider" >
            </x-success-button>

        </form>
    </section>