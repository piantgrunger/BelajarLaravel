<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i <= 20; ++$i) {
            $name = $faker->name;
            category::create([
          'name' => $name,
          'slug' => str_slug($name),
      ]);
        }
    }
}
