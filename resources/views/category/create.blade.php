@extends('home')

@section('contenu')

    <h3>Ajouter une nouvel Catégorie</h3>

    <form class="form-inline" action="{{route('category.store')}}" method="post">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Name</label>
            <input name="name" type="text" class="form-control"  placeholder="Name">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Add</button>
    </form>

@endsection()
