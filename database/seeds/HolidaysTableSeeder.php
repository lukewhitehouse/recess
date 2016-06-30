<?php

use App\Holiday;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        // Delete all contents from table
        DB::table('holidays')->delete();

        // Create new faker instance
        $faker = Faker\Factory::create();


        // Generate lots of holidays
        for($i = 0; $i < 100; $i++)
        {
            // Get start and end dates.
            $dateStart = $faker->DateTime('2016-01-01 00:00:00');
            $dateEnd   = $faker->dateTimeBetween($dateStart, $dateStart->format('Y-m-d H:i:s') . ' +'. rand(0, 10) .' days');

            // Create first 'admin' user
            Holiday::create([
                'user_id'     => rand(1, 20),
                'date_start'  => $dateStart,
                'date_end'    => $dateEnd,
                'description' => $faker->paragraph(2),
                'type'        => 'holiday',
                'status'      => 'pending'
            ]);
        }
    }
}
