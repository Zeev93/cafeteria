<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as Faker;

class OrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('ordens')->insert([
            'mesa' => $faker->randomDigit,
            'user_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('ordens')->insert([
            'mesa' => $faker->randomDigit,
            'user_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('ordens')->insert([
            'mesa' => $faker->randomDigit,
            'user_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('ordens')->insert([
            'mesa' => $faker->randomDigit,
            'user_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('orden_detalles')->insert([
            'cantidad' => $faker->randomDigit,
            'producto_id' => $faker->numberBetween($min = 1, $max = 5),
            'ordens_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('orden_detalles')->insert([
            'cantidad' => $faker->randomDigit,
            'producto_id' => $faker->numberBetween($min = 1, $max = 5),
            'ordens_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('orden_detalles')->insert([
            'cantidad' => $faker->randomDigit,
            'producto_id' => $faker->numberBetween($min = 1, $max = 5),
            'ordens_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
        DB::table('orden_detalles')->insert([
            'cantidad' => $faker->randomDigit,
            'producto_id' => $faker->numberBetween($min = 1, $max = 5),
            'ordens_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
    }
}
