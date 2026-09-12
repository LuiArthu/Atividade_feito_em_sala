<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrando: {{ $produto->nome }}</title>
</head>
<body>
    <h3>Nome: {{ $produto->nome }}</h3>
    <p>Preço: R$ {{ $produto->preco }}</p>
    <p>Quantidade: {{ $produto->quantidade }}</p>
    <p>Categoria: {{ $produto->categoria->nome }}</p>
    
</body>
</html>