<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categoria_id' => \App\Models\Categoria::all()->random()->id,
            'usuario_id' => \App\Models\User::all()->random()->id,
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->text(),
            'ingredientes' => $this->faker->text(),
            'instrucciones' => $this->faker->text(),
            'imagen' => $this->faker->imageUrl(),
        ];
    }
}
