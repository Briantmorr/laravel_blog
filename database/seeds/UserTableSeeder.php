<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Json Bourne',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Taylor Sturtz',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
