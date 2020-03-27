<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
                'locality_id'=>'1',
                'slug'=>'belfius-art-collection',
                'designation'=>'Belfius Art Collection',
                'address'=>'50 rue de l\'Ecuyer',
                'website'=>'',
                'phone'=>'',
            ],
            [
                'locality_id'=>'1',
                'slug'=>'la-samaritaine',
                'designation'=>'La Samaritaine',
                'address'=>'rue de la samaritaine',
                'website'=>'www.lasamaritaine.be',
                'phone'=>'02/511.33.95',
            ],
            [
                'locality_id'=>'2',
                'slug'=>'theatre-royal-parc',
                'designation'=>'Théâtre Royal du Parc',
                'address'=>'Rue de la Loi 3',
                'website'=>'www.theatreduparc.be',
                'phone'=>'',
            ],
            
        ];
        
        foreach ($locations as $l) {     
            DB::table('locations')->insert([
                'locality_id' => $l['locality_id'],
                'slug' => $l['slug'],
                'designation' => $l['designation'],
                'address' => $l['address'],
                'website' => $l['website'],
                'phone' => $l['phone'],
            ]);
        }
    }
}
