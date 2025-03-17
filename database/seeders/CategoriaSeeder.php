<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias')->insert([
            [
                'nombre' => 'Tecnología',
                'descripcion' => 'Productos electrónicos y gadgets.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Accesorios',
                'descripcion' => 'Complementos y periféricos para dispositivos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Hogar',
                'descripcion' => 'Electrodomésticos y artículos para el hogar.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
