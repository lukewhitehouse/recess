<?php

use App\User;
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
        // Create new faker instance
        $faker = Faker\Factory::create();

        // Create first 'admin' user
        User::create([
            'name' => 'Luke Whitehouse',
            'email' => 'luke@lukewhitehouse.co.uk',
            'password' => bcrypt('password')
        ]);

        // Generate otehr users
        foreach(range(1, 20) as $index)
        {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt($faker->password)
            ]);
        }
    }
}
