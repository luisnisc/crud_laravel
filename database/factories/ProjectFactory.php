<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Project::class;
    
     public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'horas_previstas' => $this->faker->numberBetween(10, 100),
            'fecha_de_comienzo' => $this->faker->date(),
        ];
    }
}
