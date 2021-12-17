<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'descripcion' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categorias')->insert([
            'descripcion' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categorias')->insert([
            'descripcion' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categorias')->insert([
            'descripcion' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categorias')->insert([
            'descripcion' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
