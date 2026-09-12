<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        Categoria::create([
            'nome' => 'Trafico de pessoas'
        ]);

        Categoria::create([
            'nome' => 'Comida'
        ]);

        Categoria::create([
            'nome' => 'Carro'
        ]);
    }
}
