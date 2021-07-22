<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
