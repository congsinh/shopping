<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'admin','email' => 'admin@gmail.com','password' => bcrypt('admin123'),'level'=>1,'remember_token' => str_random(10)],
            ['name'=>'user1','email' => 'user1@gmail.com','password' => bcrypt('123456'),'level'=>0,'remember_token' => str_random(10)],
            ]);
        $users = factory(\App\User::class,30)->create();
    }
}
