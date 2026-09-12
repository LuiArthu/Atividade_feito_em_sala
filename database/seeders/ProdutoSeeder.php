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
            'quantidade' => 12,
        ]);

        Produto::create([
            'nome' => 'Lauridam',
            'preco' => 1.50,
            'quantidade' => 25,
        ]);

        Produto::create([
            'nome' => 'Pastel',
            'preco' => 21.90,
            'quantidade' => 11,
        ]);

        Produto::create([
            'nome' => 'anao de jardim',
            'preco' => 21.90,
            'quantidade' => 11,
        ]);
    }
}
