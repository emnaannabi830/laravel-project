<?php

// database/factories/AthleteFactory.php

namespace Database\Factories;

use App\Models\Athlete;
use Illuminate\Database\Eloquent\Factories\Factory;

class AthleteFactory extends Factory
{
    protected $model = Athlete::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 35),
            'coach_id' => \App\Models\Coach::factory(), // Generate a related coach
        ];
    }
}
