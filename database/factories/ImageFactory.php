<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Image;
use App\Models\Promocion;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Builder\Use_;

class ImageFactory extends Factory
{
    Protected $model =Image::class;

    public function definition()
    {
        return [
            'url'=>'sitios/' . $this->faker->image('public/storage/sitios',640,480,null,false),
            'imageable_id' =>User::all()->random()->id,
            'imageale_type'=>$this->faker->randomElement([User::class, Sitio::class]),

            'url'=>'promocions/' . $this->faker->image('public/storage/promocions',640,480,null,false),
            'imageable_id' =>User::all()->random()->id,
            'imageale_type'=>$this->faker->randomElement([User::class, Promocion::class]),

            'url'=>'categories/' . $this->faker->image('public/storage/categories',640,480,null,false),
            'imageable_id' =>User::all()->random()->id,
            'imageale_type'=>$this->faker->randomElement([User::class, Category::class]),
        ];
    }
}
