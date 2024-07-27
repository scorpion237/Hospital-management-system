<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Fonction;
use App\Models\Specialitie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Employer::class;

    public function definition()
    {
        return [
             'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'contact' => $this->faker->phoneNumber(),
            'fonction_id'=> Fonction::all()->random()->id,
            'specialitie_id'=> Specialitie::all()->random()->id
        ];
    }
}
