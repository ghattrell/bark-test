<?php

use Illuminate\Database\Seeder;
use App\Guestbook\Models\Entry;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Create 10 initial records for the guest book
        for ($i = 0; $i < 10; $i++) {
            Entry::create([
                'first_name'  => $faker->firstName(),
                'last_name'   => $faker->lastName(),
                'message'     => $faker->paragraph(),
                'rating'      => $faker->randomNumber(1),
                'coming_back' => $faker->boolean(70)
            ]);
        }
    }
}
