<?php

namespace Database\Factories;

use App\Models\Level;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kid>
 */
class KidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstNameFemale().' '.$this->faker->firstNameMale(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender'=> 'انثى' ,
            'age' => $this->faker->randomElement([6, 7, 8]),
            'points'=> 0,
            'password' => Hash::make('123456789'), // password
            'level_id'=> Level::where('range_start',0)->first()->id
        ];
    }
}
