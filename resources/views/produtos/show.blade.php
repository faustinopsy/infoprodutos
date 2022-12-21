@extends('layout.app')
@section('title', $produto->titulo)
@section('content')
        <h1>Produto {{$produto->titulo}}</h1>
        <ul>
            <li>Referência: {{$produto->referencia}}</li>
            <li>Preço : {{$produto->preco}}</li>
            <li>Adicionado em: {{$produto->create_at}}</li>
        </ul>
        <p> {{$produto->descricao}}</p>
        <a class='btn btn-primary' href="javascript:history.go(-1)">Voltar</a>
        @endsection