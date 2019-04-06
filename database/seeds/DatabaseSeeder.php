<?php

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
        // $this->call(UsersTableSeeder::class);
        $users = factory(App\User::class, 20)->create();
        $product = factory(App\Product::class, 50)->create();
        $reviews = factory(App\Review::class, 100)->create()
                ->each(function ($review) {
                    $review->reviews()->save(factory(App\Product::class)->make());
                });
    }
}
