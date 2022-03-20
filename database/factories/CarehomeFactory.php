<?php

namespace Database\Factories;

use App\Models\Carehome;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carehome>
 */
class CarehomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Carehome::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name() . ' carehome',
            'status_id' => rand(1,13),
            'total_patients' => rand(10,60),
            'week' => rand(1,4),
        ];
    }
}
