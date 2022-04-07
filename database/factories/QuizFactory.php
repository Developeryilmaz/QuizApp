<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Quiz;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz>
 */
class QuizFactory extends Factory
{

    protected $model = Quiz::class;


    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(rand(3,10)),
            'description'=>$this->faker->text(20),
        ];
    }
}
