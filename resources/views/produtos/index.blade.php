<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>

    @if (session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('produtos.create') }}"> Criar Produto</a>

    @foreach ( $produtos as $produto )
        <p>Nome: {{ $produto->nome }}</p>
        <a href="{{ route('produtos.show', $produto->id) }}">Mostrar Detalhes</a>
        <hr>
    @endforeach

</body>
</html>