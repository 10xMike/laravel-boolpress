<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 25; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->words(5, true);
            $newPost->body = $faker->words(4000, true);
            $newPost->save();
        }
    }
}
