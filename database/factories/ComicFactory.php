<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titolo' => fake() -> hexColor(),
            'casa_editrice' => fake() ->company(),
            'genere' => fake() ->word(),
            'data_pubblicazione' => fake() ->dateTimeBetween(),
            'prezzo' => fake() ->randomFloat(1, 20, 30),
        ];
    }
}
