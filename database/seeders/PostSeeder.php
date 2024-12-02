<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create(['title' => 'First Post', 'content' => 'Content of the first post.']);
        Post::create(['title' => 'Second Post', 'content' => 'Content of the second post.']);
        Post::create(['title' => 'Third Post', 'content' => 'Content of the third post.']);
    }
}