<?php

namespace Database\Factories;

use App\Models\Vehicle_number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle_number>
 */
class Vehicle_numberFactory extends Factory
{
    protected $model = Vehicle_number::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nopol' => Str::random(2).' '.random_int(1000, 9999).' '.Str::random(3),
            'model_kendaraan' => Str::random(3).' '.Str::random(6),
        ];
    }
}
