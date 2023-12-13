@extends('layouts.admin')
@section('title', 'Create Commande')
@section('content')
    <h1>Creer une nouvelle Client</h1>
    <form action="{{ route('commandes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group-text">
            <label for="designation">nom:</label>
            <input name="designation" class="form-control mt-0 ms-2" type="text"
                aria-label="Checkbox for following text input">
        </div>

        <div class="input-group-text mt-2">
            <label for="description">prenom:</label>
            <input name="prix_u" class="form-control mt-0 ms-2" type="text" value=""
                aria-label="Checkbox for following text input">
        </div>

        <div class="input-group-text mt-2">
            <label for="description">ville:</label>
            <input name="quantite_stock" class="form-control mt-0 ms-2" type="text" value=""
                aria-label="Checkbox for following text input">
        </div>


        <div class="input-group-text mt-2">
            <label for="description">adress:</label>
            <input name="quantite_stock" class="form-control mt-0 ms-2" type="text" value=""
                aria-label="Checkbox for following text input">
        </div>

        <div class="input-group-text mt-2">
            <label for="description">tele:</label>
            <input name="quantite_stock" class="form-control mt-0 ms-2" type="text" value=""
                aria-label="Checkbox for following text input">
        </div>

        <div class="mt-3">
            <input type="submit" value="Ajouter">
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
