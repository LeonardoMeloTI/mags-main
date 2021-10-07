<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ContratoSeeder;
use Database\Seeders\PostoSeeder;
use Database\Seeders\BombaSeeder;
use Database\Seeders\BicoSeeder;
use Database\Seeders\TurnoSeeder;
use Database\Seeders\LeituraSeeder;


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
            UserSeeder::class,
            ContratoSeeder::class,
            PostoSeeder::class,
            BombaSeeder::class,
            BicoSeeder::class,
            TurnoSeeder::class,
            LeituraSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
