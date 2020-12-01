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

            <tbody>
                @foreach ($user as $users)
                    <tr>
                        <th scope="row">{{ $users->id }}</th>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email}}</td>
                        <td>
                            <a href="{{url("users/$users->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("users/$users->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("users/$users->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
