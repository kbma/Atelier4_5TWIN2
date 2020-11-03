@extends('home')

@section('contenu')

    <h3>Ajouter une nouvel Catégorie</h3>

    <div>
        <div class="col">
            @if (count($errors))
                <div class="alert alert-danger"role="alert">
                    <ul>
                        @foreach($errors->all() as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>

                </div>

            @endif

        </div>
    </div>





    <form class="form-inline" action="{{route('category.store')}}" method="post">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Name</label>
            <input name="name" type="text" class="form-control"  placeholder="Name" value="{{old('name')}}">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Add</button>
    </form>

@endsection()
