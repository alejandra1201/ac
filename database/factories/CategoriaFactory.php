<?php

namespace Database\Factories;
use App\Models\Categoria;
use App\Models\Sitio;
use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
     
        $name = $this->faker->unique()->word(20);
        
        return [
            'nombre_categoria'=> $this->faker->text(10),
        ];
    }
}