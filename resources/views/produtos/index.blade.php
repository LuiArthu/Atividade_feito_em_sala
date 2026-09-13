<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>

    @foreach ( $produtos as $produto )
        <h2>{{ $produto->nome }}</h2>
        <p>
        <hr>
    @endforeach

</body>
</html>
