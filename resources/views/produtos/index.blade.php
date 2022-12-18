@extends('layout.app')
@section('title','Listagem de produtos')
@section('content')
        <h1>Produtos</h1>
        <ul>
            @foreach ($produtos as $produto)
            <li>
                <a href="http://localhost/infoprodutos/public/produtos/{{$produto->id}}"
                >{{$produto->titulo}}</a>
            </li>
            @endforeach
        </ul>
    </body>
</html>