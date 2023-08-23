
<section>
    <h1>{{ $product->name }}</h1>

	<img src="{{ asset('storage/'.$product->picture) }}" alt="Image du produit" style="max-width: 300px;">

	<div>{{ $product->description }}</div>

    <div>{{ $product->price}}</div>

	<p><a href="{{ route('products.index') }}" title="Retourner aux produits" >Retourner aux produits</a></p>
</section>