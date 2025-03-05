<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected static ?string $password;

    public function definition(): array
    {
        return [
            'user_id' => User::where('role', 'SHOP')->inRandomOrder()->first()?->id,
            'name' => $this->faker->company,
            'image_url' => $this->faker->optional(0.3)->imageUrl(640, 480, 'business'),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'description' => $this->faker->text(200),
            'is_open' => $this->faker->boolean,
            'latitude' => $this->faker->latitude(13.8200, 13.8500),
            'longitude' => $this->faker->longitude(100.5600, 100.5800),
        ];
    }
}
