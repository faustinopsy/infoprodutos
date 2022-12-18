<!DOCTYPE html>
<html>
    <header>
        <title>Produto {{$produto->titulo}}</title>
    </header>
    <body>
        <h1>Produto {{$produto->titulo}}</h1>
        <ul>
            <li>Referência: {{$produto->referencia}}</li>
            <li>Preço : {{$produto->preco}}</li>
            <li>Adicionado em: {{$produto->create_at}}</li>
        </ul>
        <p> {{$produto->descricao}}</p>
        <a href="javascript:history.go(-1)">Voltar</a>
    </body>
</html>