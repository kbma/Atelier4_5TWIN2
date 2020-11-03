@extends('home')

@section('contenu')

    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>

            @foreach($all as $cat)

                    <tr>
                        <th scope="row">{{$cat->id}}</th>
                        <td>{{$cat->name}}</td>
                       <td>{{$cat->updated_at}}</td>
                        <td>
                            <a class="btn btn-success" href="">Edit</a>
                            <a class="btn btn-danger" href="" data-toggle="modal" data-target="#delete{{$cat->id}}">Delete</a>
                        </td>
                    </tr>

                    <form action="{{route('category.destroy',$cat->id)}}" method="post">

                        @method('DELETE')
                        @csrf
                    <!-- Modal -->
                    <div class="modal fade" id="delete{{$cat->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Voulez vous vraiment supprimer la categorie {{$cat->name}} ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>


            @endforeach()
        </tbody>
    </table>
    {{$all->links('pagination::bootstrap-4')}}







@endsection
