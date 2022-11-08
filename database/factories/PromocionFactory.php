<?php

namespace Database\Factories;

use App\Models\Promocion;
use App\Models\Sitio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PromocionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Promocion::class;
    public function definition()
    {
        return [
            'tipo_promocion'	=> $this->faker->text(10),
            'descripcionpromocion'	=> $this->faker->text(10),
            'descuento'	=> $this->faker->text(10),
            'fechai'	=> $this->faker->dateTimeAD(10),
            'fechaf' =>$this->faker->dateTimeAD(10),
            'sitio_id'=>Sitio::all()->random()->id
        ];
    }
}
