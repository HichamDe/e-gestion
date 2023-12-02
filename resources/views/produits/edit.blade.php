@extends('layouts.admin')
@section('title', 'Ajouter un produit')
@section('content')
    <h1>Creer une nouvelle produit</h1>
    <form action="{{ route('produits.update', ['produit' => $data["prod"]->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="designation">Designation</label>
            <input type="text" name="designation" id="designation" value="{{ old('designation', $data["prod"]->designation) }}">
        </div>

        <div>
            <label for="prix_u">prix unite</label>
            <input type='text' name="prix_u" id="prix_u" cols="30" rows="10"
                value="{{ old('prix_u', $data["prod"]->prix_u) }}">
        </div>
        <div>
            <label for="quantite_stock">quantite stock</label>
            <input type='text' name="quantite_stock" id="quantite_stock" cols="30" rows="10"
                value="{{ old('quantite_stock', $data["prod"]->quantite_stock) }}">
        </div>
        <select class="form-select @error("categorie_id") is-invalid @enderror" name="categorie_id" id="cat_id">
            <option value="" selected>Select categorie Id</option>
            @foreach ($data["cats"] as $item)
                <option value="{{ $item->id }}">{{ $item->designation }}</option>
            @endforeach
        </select>
        <div>
            <input type="submit" value="modifier">
        </div>
    </form>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $er)
                    <li>{{ $er }}</li>
                @endforeach
            </ul>


        @endif
    </div>
@endsection
