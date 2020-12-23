<?php

namespace Database\Factories;

use App\Models\Fear;
use Illuminate\Database\Eloquent\Factories\Factory;

class FearFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fear::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->randomHtml()
        ];
    }
}
