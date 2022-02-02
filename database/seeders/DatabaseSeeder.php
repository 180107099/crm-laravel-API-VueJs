<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Ticket;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        /*$this->call([
            RolesSeeder::class,
        ]);*/
        
        //User::factory(5)->create();
        User::factory(1)->admin()->create();

        User::factory(5)
        ->client()
        ->has(Ticket::factory()->count(3))
        ->create();
    }
}
