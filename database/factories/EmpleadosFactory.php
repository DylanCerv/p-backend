<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleados>
 */
class EmpleadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'compania_id' => $this ->faker->randomElement(['1','2','3','4','5']),
            'primer_nombre' => $this ->faker->firstName(),
            'apellido' => $this ->faker->name(),
            'correo' => $this ->faker->freeEmail()
        ];
    }
}
