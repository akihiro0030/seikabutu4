<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('games')->insert([
             'name'=>'ゲーム名',
             'over-review'=>'本文',
             
        ]);
         DB::table('games')->insert([
             'name'=>'エラー',
             'over-review'=>'エラー',
             
        ]);          
        
        
    }
    
}
