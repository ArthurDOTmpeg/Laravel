<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['roles'=>'Administrateur'],
            ['roles'=>'Employé'],
            ['roles'=>'Guest'],
            ['roles'=>'Artiste'],
        ];
        
        foreach ($roles as $r) {     
            DB::table('roles')->insert([
                'roles' => $r['roles'],
            ]);
        }

    }
}
