<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Post::truncate();

        for ($i=0; $i <25; $i++) {
            # code...
            $c = Category::inRandomOrder()->first();

            $title= Str::random(20);

            Post::create([
                'title'=>$title,
                'slug'=>Str::slug($title),
                'content'=> "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus aspernatur ex, laborum laboriosam modi neque dicta consectetur quod tempore perferendis! Quisquam porro modi esse ex commodi obcaecati pariatur excepturi impedit?</p>",
                'categories_id'=>$c->id,
                'description'=>"lorem dfgvryedbhvjdsbvkjdfbvjfv",
                'posted'=>"yes",
            ]);
        }

    }
}
