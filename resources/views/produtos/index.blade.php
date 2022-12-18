<!DOCTYPE html>
<html>
    <header>
        <title>Produtos</title>
    </header>
    <body>
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