<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name' => $this->faker->name(),
        'url' => $this->faker->unique()->slug() ,
        'displayImage' => [
            'src' => $this->faker->imageUrl(640, 480, 'business', true),
            'srcset' => $this->faker->imageUrl(1280, 960, 'business', true) . ' 2x',
        ],
        'client_brief' => $this->faker->paragraph(),
        'services' => $this->faker->words(5),
        'tools' => $this->faker->words(3),
    ];
    }
}


// Schema::create('projects', function (Blueprint $table) {
//     $table->id();
//     $table->string('name');
//     $table->string('url')->unique();
//     $table->json('displayImage');
//     $table->text('client_brief')->nullable();
//     $table->array('services');
//     $table->array('tools')->nullable();
//     $table->timestamps();
// });