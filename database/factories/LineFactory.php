<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Chapter;
use App\Models\Line;
use Illuminate\Database\Eloquent\Factories\Factory;

class LineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Line::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'chapter_id' => Chapter::factory(),
            'book_id' => Book::factory(),
            'content' => $this->faker->text(250)
        ];
    }
}
