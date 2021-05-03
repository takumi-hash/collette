<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'takumi_hash', //Str::random(10),
        'email' => 'takumi@example.com', //Str::random(10).'@example.com',
        'password' => Hash::make('pass'),
      ]);
    }
}
