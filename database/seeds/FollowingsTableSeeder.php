<?php

use Illuminate\Database\Seeder;

class FollowingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_follow')->insert([
            'user_id' => 1,
            'follow_id' => 2,
        ]);

        DB::table('user_follow')->insert([
            'user_id' => 1,
            'follow_id' => 3,
        ]);
    }
}
