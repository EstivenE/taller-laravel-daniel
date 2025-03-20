<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Producto 1',
                'descripcion' => 'Descripción del producto 1',
                'precio' => 10000,
                'stock' => 50,
                'categoria_id' => 1,
                'imagen' => 'https://auteco.vtexassets.com/arquivos/ids/380961/moto_victory_newlife_gris_pie_verde_23_foto01.png?v=638751726561570000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Producto 2',
                'descripcion' => 'Descripción del producto 2',
                'precio' => 15000,
                'stock' => 30,
                'categoria_id' => 2,
                'imagen' => 'https://images.ctfassets.net/8zlbnewncp6f/2fH3mKeHaSrfHQlEsm2xxt/c9c0202dc9333bd05422552a3a14e34b/Galeria2_Galgo_Chile.jpg?w=600&fm=webp&q=90',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Producto 3',
                'descripcion' => 'Descripción del producto 3',
                'precio' => 20000,
                'stock' => 20,
                'categoria_id' => 1,
                'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_872403-CBT72405655739_102023-O.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}