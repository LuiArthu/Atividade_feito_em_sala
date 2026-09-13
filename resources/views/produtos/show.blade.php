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
    
    <a href="{{ route('produtos.edit', $produto) }}">Editar Informações</a>

    <form action="{{ route('produtos.destroy', $produto) }}" method="POST">
        @csrf
        @method('DELETE')

        <x-danger-button type="submit">Deletar Produto</x-danger-button>
    </form>
</body>
</html>