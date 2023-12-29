<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
        
    </x-slot>

    {{-- Search and Ajouter --}}
    <h1 class="mt-5 mb-3">Liste des categories</h1>
    <form action="{{ route('categories.search') }}" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="designation">
            <button class="input-group-text" type="submit">
                <img src="{{ asset('/search.png') }}">
            </button>
            <div id="ajouter"><a class="ms-2 btn btn-primary" href="{{ route('categories.create') }}">Ajouter
                    categorie</a></div>
        </div>
    </form>

    {{-- reset --}}
    <a href="{{ route('categories.index') }}">list des categories</a>

    {{-- Viewer --}}
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Designation</th>
            <th>Description</th>
            <th colspan="3">Actions</th>
        </thead>
        <tbody>
            @foreach ($categories as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->designation }}</td>
                    <td>{{ $cat->description }}</td>
                    <td>
                        <a href="{{ route('categories.show', ['category' => $cat->id]) }}">
                            <img src="{{ asset('/details.png') }}">
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('categories.edit', ['category' => $cat->id]) }}">
                            <img src="{{ asset('/change.png') }}">
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('categories.destroy', ['category' => $cat->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('voulez-vous supprimer cette categorie?')">
                                <img src="{{ asset('/delete.png') }}">
                            </button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
<x-app-layout>
