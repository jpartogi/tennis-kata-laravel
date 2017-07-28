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
        DB::table('players')->insert([
            'name' => "Rafael_Nadal",
            'score' => 0,
        ]);

        DB::table('players')->insert([
            'name' => "Roger_Federer",
            'score' => 0,
        ]);
    }
}
