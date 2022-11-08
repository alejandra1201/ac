<?php

namespace Database\Factories;

use App\Models\Sitio;
use Illuminate\Database\Eloquent\Factories\Factory;

class SitioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model=Sitio::class;
    
    public function definition()
    {
        return [
            'nombre_sitio' => $this->faker->text(10),
            'direccion'	=> $this->faker->text(10),
            'municipio'	=> $this->faker->text(10),
            'contacto'	=> $this->faker->numberBetween(),
            'descripcion'	=> $this->faker->text(10),
            'sitio_web' =>$this->faker->text(10),
            'rutas' =>$this->faker->text(10)
        ];
    }
}
