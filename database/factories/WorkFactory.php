<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'job_title' => $this->faker->jobTitle,
            'start_from' => $this->faker->year
                //id
                //company  
                //job_title
                //start_from
                //end_to
            //
        ];
    }
}
