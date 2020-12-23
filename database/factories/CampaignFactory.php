<?php

namespace Database\Factories;

use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampaignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Campaign::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thumb_url'=>$this->faker->imageUrl(),
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->randomHtml(),
            'start_date' => $this->faker->dateTimeThisMonth
        ];
    }
}
