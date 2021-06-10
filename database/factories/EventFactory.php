<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_start' => $this->faker->dateTime(),
            'date_end' => $this->faker->dateTime(),
            'name' => $this->faker->sentence(3),
            'img_src' => $this->faker->imageUrl($width = 720, $height = 400, 'Evento'),
            'description' => $this->faker->paragraph(6, true),
            'place' => $this->faker->city(),
            'address' => $this->faker->address(),
            'telephone' => $this->faker->e164PhoneNumber(),
            'email' => $this->faker->companyEmail(),
            'url' => $this->faker->url(),
        ];
    }
}
