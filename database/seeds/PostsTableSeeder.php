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
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => Str::random(10),
            'body' => Str::random(1000).'test body',
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => Str::random(10),
            'body' => Str::random(1000).'test body',
        ]);

        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => Str::random(10),
            'body' => Str::random(1000).'test body',
        ]);
    }
}
