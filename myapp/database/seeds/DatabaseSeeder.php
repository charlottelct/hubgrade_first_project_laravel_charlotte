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
        class DatabaseSeeder extends Seeder
        {
            public function run()
            {
               // $this->call(ArticlesTableSeeder::class);
                $this->call(UsersTableSeeder::class);
                $this->call(PasseportTableSeeder::class);
            }
        }
    }
}
