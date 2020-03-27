<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArtistsTableSeeder::class,
            TypesTableSeeder::class,
            RolesTableSeeder::class,
            LocalitiesTableSeeder::class,
            LocationsTableSeeder::class,
            UsersTableSeeder::class,
        ]);

    }
}
