<?php

namespace Database\Factories;

use App\Models\Servicio;
use App\Models\Sitio;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Servicio::class;

    public function definition()
    {
        return [
            
            'nombreServicio' => $this->faker->text(10),
            'valorServicio' =>$this->faker->text(10),
            'sitio_id'=>Sitio::all()->random()->id,
            
        ];
    }
}
