<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Laptop Gamer',
                'descripcion' => 'Laptop de alto rendimiento con tarjeta gráfica dedicada.',
                'precio' => 3500,
                'stock' => 10,
                'categoria_id' => 1, // Asegúrate de tener una categoría con este ID
                'imagen' => 'imagenes/laptop.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Mouse Inalámbrico',
                'descripcion' => 'Mouse ergonómico con batería recargable.',
                'precio' => 200,
                'stock' => 30,
                'categoria_id' => 2,
                'imagen' => 'imagenes/mouse.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Teclado Mecánico',
                'descripcion' => 'Teclado mecánico con retroiluminación RGB.',
                'precio' => 500,
                'stock' => 15,
                'categoria_id' => 2,
                'imagen' => 'imagenes/teclado.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
