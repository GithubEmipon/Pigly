<?php

namespace Database\Factories;

use App\Models\WeightLogs;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogsFactory extends Factory
{
    protected $model = WeightLogs::class;

    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'weight' =>$this->faker->randomFloat(1,40,100),
            'calories' =>$this->faker->randomNumber(4, true),
            'exercise_time' =>$this->faker->time(),
            'exercise_content' =>$this ->faker->realText(120),
        ];
    }
}
