<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'source' => $this->faker->company(),
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph(1, true),
            'content' => $this->faker->paragraph(6, true),
            'url' => $this->faker->url(),
            'urlToImage' => $this->faker->imageUrl($width = 720, $height = 400, 'Articulo'),
            'publishedAt' => $this->faker->dateTime(),
            'highlight' => 0,
        ];
    }
}
