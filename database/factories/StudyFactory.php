<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'start' =>  $this->faker->year,
            'end' =>  $this->faker->year,
            'degree' => $this->faker->sentence,
            'location' => $this->faker->sentence
        ];
    }
}
