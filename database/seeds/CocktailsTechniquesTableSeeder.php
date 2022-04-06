<?php

use Illuminate\Database\Seeder;

class CocktailsTechniquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktails_techniques')->insert([
            [
                'cocktail_id' => '1',
                'technique_id' => '2'
            ],[
                'cocktail_id' => '2',
                'technique_id' => '2'
            ],[
                'cocktail_id' => '3',
                'technique_id' => '1'
            ],[
                'cocktail_id' => '4',
                'technique_id' => '1'
            ],[
                'cocktail_id' => '5',
                'technique_id' => '3'
            ],[
                'cocktail_id' => '6',
                'technique_id' => '4'
            ],[
                'cocktail_id' => '7',
                'technique_id' => '4'
            ],[
                'cocktail_id' => '8',
                'technique_id' => '5'
            ],[
                'cocktail_id' => '9',
                'technique_id' => '5'
            ],[
                'cocktail_id' => '10',
                'technique_id' => '6'
            ]
        ]);
    }
}
