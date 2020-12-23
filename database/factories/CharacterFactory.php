<?php

namespace Database\Factories;

use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Character::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'player_name' => $this->faker->name,
            'avatar_url' => $this->faker->imageUrl(),
            'character_sheet_url' => $this->faker->url,
            'backstory' => $this->faker->randomHtml(),
            'secrets' => $this->faker->randomHtml(),
        ];
    }
}
