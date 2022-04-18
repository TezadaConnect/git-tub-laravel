<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OutreachProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_of_the_program' => $this->faker->text(),
            'place' => $this->faker->text(),
            'date' => date("Y-m-d"),
            'level' => rand(174, 176),
            'description' => $this->faker->word(),
            'user_id' => 2,
            'report_quarter' => 2,
            'report_year' => 2022,
        ];
    }
}