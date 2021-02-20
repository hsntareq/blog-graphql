<?php

use App\Topic;
use App\User;
use App\Post;
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
        factory(User::class, 20)->create();

        Topic::create(['name'=>'Featured Sites','slug'=>'featured']);
        Topic::create(['name'=>'Useful Slug','slug'=>'links']);
        Topic::create(['name'=>'Guide & Tutorials','slug'=>'tutorials']);

        factory(Post::class, 50)->create();


    }
}
