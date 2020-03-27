<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users = [
            [
                'login'=>'Johnny',
                'password' => 'Johnny123',
                'firstname' => 'John',
                'lastname' => 'Doe',
                'email' => 'j.doe@gmail.com',
                'language' => 'EN',
                'roles_id' => '1'
            ],
            [
                'login'=>'Bobby',
                'password' => 'Bobby123',
                'firstname' => 'Bob',
                'lastname' => 'Foe',
                'email' => 'b.foe@gmail.com',
                'language' => 'FR',
                'roles_id' => '2'
            ],
            [
                'login'=>'Willy',
                'password' => 'Willy123',
                'firstname' => 'Will',
                'lastname' => 'Loe',
                'email' => 'w.loe@gmail.com',
                'language' => 'NL',
                'roles_id' => '2'
            ],
             [
                'login'=>'Jetlee',
                'password' => 'Jetlee123',
                'firstname' => 'Jet',
                'lastname' => 'Lee',
                'email' => 'j.lee@gmail.com',
                'language' => 'FR',
                'roles_id' => '3'
            ],
        ];
        
        foreach ($users as $u) {     
            DB::table('users')->insert([
                'login' => $u['login'],
                'password' => $u['password'],
                'firstname' => $u['firstname'],
                'lastname' => $u['lastname'],
                'email' => $u['email'],
                'language' => $u['language'],
                'roles_id' => $u['roles_id'],
            ]);
        }
    }
}
