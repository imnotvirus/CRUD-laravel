@extends('templates.template');
@section('content')
    <h1 class="text-center">Usuarios</h1>
    <hr>
    <div class="text-center mt-3 mb-4">
        <a href="{{ url('user/create') }}">
            <button class="btn btn-success">
                Cadastrar escritor
            </button>
        </a>
    </div>
    <div class="col-8 m-auto">
        <table class="table text-center table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        </table>
        <tbody>
            @foreach ($user as $users)
                <tr>
                    <th scope="row">{{ $users->id }}</th>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </div>
@endsection
