<?php

namespace Database\Seeders;

use app\Models\user;
use app\Models\Categoria;
use app\Models\Receta;
use app\Models\Etiqueta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        user::factory()->create([
            'name' => 'Luis Uriel Vargas Carbajal',
            'email' => 'luis.uriel.vargas.carbajal@example.com',

        ]);
        User::factory(29)->create();
        Categoria::factory(10)->create();
        Receta::factory(100)->create();
        Etiqueta::factory(40)->create();

        //Relacion muchos a muchos entre recetas y etiquetas
        $recetas = Receta::all();
        $etiquetas = Etiqueta::all();

        foreach ($recetas as $receta) {
            $receta->etiquetas()->attach(
                $etiquetas->random(rand(2, 4))
            );
        }
    }
}
