<?php

namespace Database\Factories;

use App\Models\Returns;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ReturnsFactory extends Factory
{
    protected $model = Returns::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'loan_detail_id' => \App\Models\LoanDetail::inRandomOrder()->first()->id,
            'charge' => $this->faker->boolean(),
            'amount' => $this->faker->numberBetween(0, 50000),
        ];
    }
}
