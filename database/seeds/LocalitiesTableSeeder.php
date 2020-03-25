<?php

use Illuminate\Database\Seeder;

class LocalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        $localities = [
            ['postal_code'=>'1000','localities'=>'Bruxelles'],
            ['postal_code'=>'1780','localities'=>'Wemmel'],
            ['postal_code'=>'1090','localities'=>'Jette'],
            ['postal_code'=>'666','localities'=>'Hell'],];
        
        foreach ($localities as $l) {     
            DB::table('localities')->insert([
                'postal_code' => $l['postal_code'],
                'localities' => $l['localities'],
            ]);
        }
    }

}
