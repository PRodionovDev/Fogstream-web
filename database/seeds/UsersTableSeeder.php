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
        factory(App\User::class, 'user', 10)->create()->each(function ($user) {
        	$user->profile()->save(factory(App\Profile::class, 'user')->make());
        });
    }
}
