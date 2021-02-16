<?php

namespace Database\Seeders;

use App\Models\Chapter;
use App\Models\Line;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        \App\Models\User::factory(25)->create();

        $number = 1;
        \App\Models\Book::factory(5)
            ->has(Chapter::factory()->count(random_int(5, 20))
//                Line::factory()->count(random_int(5, 100))->state([
//                    'number' => $number
//                ])->afterCreating(function($line) use(&$number) {
//                    $number++;
//                })
            )
            ->create();
    }
}
