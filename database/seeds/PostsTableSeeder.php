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
        $posts = [
           //dati
        ];

        foreach($posts as $post){
            $newPost = new Post();
            $newPost->title = $post['title'];
            $newPost->body = $post['body'];
            $newPost->save();
        }
    }
}
