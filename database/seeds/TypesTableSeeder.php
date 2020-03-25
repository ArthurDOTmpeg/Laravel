<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['types'=>'Acteur'],
            ['types'=>'Musicien'],
            ['types'=>'Chorégraphe'],
        ];
        
        foreach ($types as $t) {     
            DB::table('types')->insert([
                'types' => $t['types'],
            ]);
        }

    }
}
