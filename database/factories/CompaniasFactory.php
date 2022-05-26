<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Companias>
 */
class CompaniasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this ->faker->randomElement(['Gesda', 'Liroliru', 'Arsar', 'Factorys', 'Prettier']),
            'email' => $this ->faker->freeEmail(),
            'logo' => $this ->faker->imageUrl(100, 100),
            'pagina_web' => $this ->faker->imageUrl(100, 100)
        ];
    }
}
