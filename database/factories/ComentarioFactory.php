<?php

namespace Database\Factories;

use App\Models\Comentario;
use App\Models\Sitio;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Comentario::class;

    public function definition()
    {
        return [
            'mensaje' => $this->faker->text(10),
            'user_id'=>User::all()->random()->id,
            'sitio_id'=>Sitio::all()->random()->id
        ];
    }
}
