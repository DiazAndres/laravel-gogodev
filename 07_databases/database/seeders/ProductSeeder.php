<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //* Se crea un seeder por cada modelo y se mandan a llamar en la clase DatabaseSeeder
        // * Un seeder es un archivo que se encarga de poblar la base de datos con datos de prueba
        // Product::create([
        //     'name' => 'Producto 1',
        //     'short_description' => 'Descripción corta del producto 1',
        //     'description' => 'Descripción larga del producto 1',
        //     'price' => 1000,
        // ]);
        // Product::create([
        //     'name' => 'Producto 2',
        //     'short_description' => 'Descripción corta del producto 2',
        //     'description' => 'Descripción larga del producto 2',
        //     'price' => 2000,
        // ]);
        // Product::create([
        //     'name' => 'Producto 3',
        //     'short_description' => 'Descripción corta del producto 3',
        //     'description' => 'Descripción larga del producto 3',
        //     'price' => 3000,
        // ]);
        // Product::create([
        //     'name' => 'Producto 4',
        //     'short_description' => 'Descripción corta del producto 4',
        //     'description' => 'Descripción larga del producto 4',
        //     'price' => 4000,
        // ]);


        // * Se puede utilizar el método factory para crear registros de prueba
        Product::factory()->count(10)->create();
    }
}
