<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Call holiday seeder
        $this->call(HolidaysTableSeeder::class);

        // Call user seeder
        $this->call(UsersTableSeeder::class);
    }
}
