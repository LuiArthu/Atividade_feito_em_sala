<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'nome' => 'Juan',
            'preco' => 0.50,
            'quantidade' => 1,
            'categoria_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Lauridam',
            'preco' => 1.50,
            'quantidade' => 1,
            'categoria_id' => 1,

        ]);

        Produto::create([
            'nome' => 'Pastel',
            'preco' => 21.90,
            'quantidade' => 1000,
            'categoria_id' => 2,
        ]);

        Produto::create([
            'nome' => 'anao de jardim',
            'preco' => 1000.90,
            'quantidade' => 10,
            'categoria_id' => 1,
        ]);

        Produto::create([
            'nome' => 'fuscao preto',
            'preco' => 9999.90,
            'quantidade' => 1,
            'categoria_id' => 3,
        ]);
    }
}
