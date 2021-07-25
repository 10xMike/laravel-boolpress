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
            $newPost->title = $faker->sentence(3);
            $newPost->image = $faker->imageUrl(640, 300, 'Posts', true, $newPost->title);
            $newPost->body = $faker->words(4000, true);
            $newPost->save();
        }
    }
}
