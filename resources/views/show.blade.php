@extends('templates.template')
@section('content')
    <h1 class="text-center">Visualizar</h1>
    <hr>
    <div class="col-8 m-auto">
        @php
        $user = $book->find($book->id)->relUsers;
        @endphp

        Titulo:     {{$book->title}} <br>
        paginas:    {{$book->pages}} <br>
        preço:      {{$book->price}} <br>
        Autor:      {{$user->name}} <br>
        E-mail:     {{$user->email}} <br>
        <a href="{{url("books")}}">
            <button class="btn btn-success">voltar</button>
        </a>
    </div>
@endsection
