<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bomba;

class BombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bomba::create([
            'name'        => 'Bomba A',
            'modelo'      => 'Prime PMD ',
            'posto_id'    => '1',
        ]);

        Bomba::create([
            'name'        => 'Bomba B',
            'modelo'      => 'Prime PHR ',
            'posto_id'    => '1', // professor
        ]);

        Bomba::create([
            'name'        => 'Bomba C',
            'modelo'      => 'PRIME PHX ARLA ',
            'posto_id'    => '1', // professor
        ]);

        Bomba::create([
            'name'        => 'Bomba A2', // professor
            'modelo'      => 'Prime PMD2 ', // professor
            'posto_id'    => '2', // professor
        ]);

        Bomba::create([
            'name'        => 'Bomba B2', // professor
            'modelo'      => 'Prime PHR2 ', // professor
            'posto_id'    => '2', // professor
        ]);

        Bomba::create([
            'name'        => 'Bomba C2', // professor
            'modelo'      => 'PRIME PHX ARLA2 ', //professor
            'posto_id'    => '2', // professor
        ]);

    }
}
