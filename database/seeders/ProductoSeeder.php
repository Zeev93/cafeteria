<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('productos')->insert([
            'nombre' => Str::random(10),
            'descripcion' => $faker->text,
            'precio' => $faker->randomDigit,
            'stock' => $faker->randomDigit,
            'categoria_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('productos')->insert([
            'nombre' => Str::random(10),
            'descripcion' => $faker->text,
            'precio' => $faker->randomDigit,
            'stock' => $faker->randomDigit,
            'categoria_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('productos')->insert([
            'nombre' => Str::random(10),
            'descripcion' => $faker->text,
            'precio' => $faker->randomDigit,
            'stock' => $faker->randomDigit,
            'categoria_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('productos')->insert([
            'nombre' => Str::random(10),
            'descripcion' => $faker->text,
            'precio' => $faker->randomDigit,
            'stock' => $faker->randomDigit,
            'categoria_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('productos')->insert([
            'nombre' => Str::random(10),
            'descripcion' => $faker->text,
            'precio' => $faker->randomDigit,
            'stock' => $faker->randomDigit,
            'categoria_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('productos')->insert([
            'nombre' => Str::random(10),
            'descripcion' => $faker->text,
            'precio' => $faker->randomDigit,
            'stock' => $faker->randomDigit,
            'categoria_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
    }
}
