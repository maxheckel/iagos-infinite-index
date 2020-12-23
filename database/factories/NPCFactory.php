<?php

namespace Database\Factories;

use App\Models\NPC;
use Illuminate\Database\Eloquent\Factories\Factory;

class NPCFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NPC::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->randomHtml(),
            'dead' => $this->faker->boolean,
            'wares' => $this->faker->sentence
        ];
    }
}
