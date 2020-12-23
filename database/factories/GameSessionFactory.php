<?php

namespace Database\Factories;

use App\Models\GameSession;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameSessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GameSession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'notes' => $this->faker->randomHtml(),
            'date' => $this->faker->dateTimeThisMonth,
            'hours_played' => $this->faker->numberBetween(1,5),
            'character_ids' => '1,2,3'
        ];
    }
}
