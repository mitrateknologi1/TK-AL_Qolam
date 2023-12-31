<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(2)->create();

        \App\Models\role::create([
            'name' => 'Admin'
        ]);

        \App\Models\role::create([
            'name' => 'Users'
        ]);
    }
}
