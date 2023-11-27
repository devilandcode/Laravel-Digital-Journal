<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->words(2, true);
        $description = $this->faker->realText(160);
        $preview = $this->faker->realText(30);
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'description' => $description,
            'preview' => $preview,
            'slug' => $slug
        ];
    }
}
