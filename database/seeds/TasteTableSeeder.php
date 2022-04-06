<?php

use Illuminate\Database\Seeder;

class TasteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tastes')->insert([
            [
                'name' => '甘口'
            ],[
                'name' => '中辛'
            ],[
                'name' => '辛口'
            ],[
                'name' => '中甘辛口'
            ]
        ]);
    }
}
