<?php

namespace Database\Factories;

use App\Models\Reserva;
use App\Models\Sitio;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model=Reserva::class;
    public function definition()
    {
        return [
            'estado' => $this->faker->text(10),
            'correo'	=> $this->faker->text(10),
            'fechaReserva'	=> $this->faker->dateTimeAD(),
            'contacto'	=> $this->faker->numberBetween(),
            'descripcionReserva' =>$this->faker->text(10),
            'sitio_id'=>Sitio::all()->random()->id
        ];
    }
}
