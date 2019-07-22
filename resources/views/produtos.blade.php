@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($produtos as $produto)
            <li>{{$produto->nome_produto}}
             <a href="/produto/deletar/{{$produto->id}}">Deletar</a>
            </li>
        @endforeach
    </ul>
    {{$produtos->links()}} 

@endsection
