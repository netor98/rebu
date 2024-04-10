<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;
use Faker\Factory as Faker;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES'); // Establecer el generador Faker en español

        // Llenar la tabla de productos con productos de comida (postres)
        for ($i = 0; $i < 10; $i++) { // Puedes ajustar el número de productos que deseas crear
            Product::create([
                'name' => $faker->word,
                'cuantity' => 5,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 5, 50), // Precio aleatorio entre 5 y 50
                'active' => true, // Todos los productos están activos por defecto
                // Puedes agregar más campos como 'image' si lo deseas
            ]);
        }
    }
}
