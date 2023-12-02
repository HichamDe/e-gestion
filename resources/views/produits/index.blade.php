@extends('layouts.admin')
@section('title', 'Gestion des produits')
@section('content')



    {{-- Search and Ajouter --}}
    <h1 class="mt-5 mb-3">Liste des Produit</h1>
    <form action="{{ route('produits.index') }}" method="get" >
        <div class="input-group mb-3">
            <label for="designation">designation</label>
            <input type="text" class="form-control" name="designation" value="{{old("designation")}}">
            <label for="min_price">min price</label>
            <input class="form-control" type="text" name="min_price" value="{{old("min_price")}}">
            <label for="min_price">max price</label>
            <input class="form-control" type="text" name="max_price" value="{{old("max_price")}}">
           <input type="submit" value="submit">
    </form>
    {{-- <form action="" method="GET">
        <label for="min_price">Min Price:</label>
        <input type="text" name="min_price" id="min_price" value="{{ old("minPrice") }}">
        {{-- <input type="text" name="min_price" id="min_price"> --}}
{{-- 

        <label for="max_price">Max Price:</label>
        <input type="text" name="max_price" id="max_price" value="{{ old("maxPrice") }}">
        <input type="text" name="max_price" id="max_price">


        <button type="submit">Filter</button>
    </form> -- --}}
    <div id="ajouter">
        <a class="ms-2 btn btn-primary" href="{{ route('produits.create') }}">Ajouter Produit</a>
    </div>
    </div>


    {{-- reset --}}
    <a href="{{ route('produits.index') }}">list des produits</a>

    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Designation</th>
            <th>prix unite</th>
            <th>quantite en stock</th>
            <th>categorie id</th>
            <th colspan="3">Actions</th>
        </tr>
        @foreach ($produits as $prod)
            <tr>
                <td>{{ $prod->id }}</td>
                <td>{{ $prod->designation }}</td>
                <td>{{ $prod->prix_u }}</td>
                <td>{{ $prod->quantite_stock }}</td>
                <td>{{ $prod->categorie_id }}</td>

                <td>
                    <a href="{{ route('produits.show', ['produit' => $prod->id]) }}">
                        <img src="{{ asset('/details.png') }}">
                    </a>
                </td>
                <td>
                    <a class="btn btn-success" href="{{ route('produits.edit', ['produit' => $prod->id]) }}">
                        <img src="{{ asset('/change.png') }}">
                    </a>
                </td>
                <td>
                    <form action="{{ route('produits.destroy', ['produit' => $prod->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit"
                            onclick="return confirm('voulez-vous supprimer ce produit?')">
                            <img src="{{ asset('/delete.png') }}">
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div>
        <p> results {{$produits->count()}} of {{$produits->total()}}</p>
        <div>
            
        </div>
    </div>
    {{ $produits->links() }}
@endsection
