<label for="nome">Nome: </label>
        <input type="text" name="nome" required>

        <label for="preco">Preço: </label>
        <input type="number" step="any" name="preco" required>

        <label for="quantidade">Quantidade: </label>
        <input type="number" name="quantidade" required>

        <select name="categoria_id">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}"> {{ $categoria->nome }} </option>
            @endforeach
        </select>