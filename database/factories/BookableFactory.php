<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bookable;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class BookableFactory extends Factory
{
    protected $suffix = [
        'Villa',
        'House',
        'Cottage',
        'Luxury Villas',
        'Cheap House',
        'Rooms',
        'Cheap Rooms',
        'Luxury Rooms',
        'Fancy Rooms'
    ];

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bookable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->city . ' ' . Arr::random($this->suffix),
            'description' => $this->faker->text(),
            'price' => random_int(15, 600)
        ];
    }
}