<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . Str::lower(Str::random(6)),
            'body' => $this->faker->paragraphs(3, true),

            'views' => $this->faker->numberBetween(0, 5000),
            'answers' => 0,
            'votes' => $this->faker->numberBetween(-10, 50),

            'best_answer_id' => null,

            // создаст пользователя, если не передан
            'user_id' => User::factory(),
        ];
    }
}
