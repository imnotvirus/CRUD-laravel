@extends('templates.template')
@section('content')
    <h1 class="text-center">Cadastro de livros</h1>
    <hr>
    <div class="col-8 m-auto">

        <form name="formCad" id="formCad" action="{{url("books")}}" method="post">
            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Titulo"> <br>
            <select class="form-control" name="id_user" id="id_user">
                <option value="">Autor</option>
                @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select> <br>
            <input class="form-control" type="text" name="pages" id="pages" placeholder="Paginas"> <br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço"> <br>
            <input class="btn btn-primary" type="submit" value="Cadastra">
        </form>

    </div>
@endsection
