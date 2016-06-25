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
            'first_name' => 'Luke',
            'last_name'  => 'Whitehouse',
            'job_role'   => 'Senior Front-end Developer',
            'email'      => 'luke@lukewhitehouse.co.uk',
            'password'   => bcrypt('password')
        ]);

        // Generate otehr users
        for($i = 0; $i > 20; $i++)
        {
            User::create([
                'first_name' => $faker->firstName,
                'last_name'  => $faker->lastName,
                'job_role'   => $faker->jobTitle,
                'email'      => $faker->email,
                'password'   => bcrypt($faker->password)
            ]);
        }
    }
}
