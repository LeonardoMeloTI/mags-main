<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bico;


class BicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bico::create([
            'name'        => 'Bico 1',
            'bomba_id'    => '1',
        ]);

        Bico::create([
            'name'        => 'Bico 2',
            'bomba_id'    => '1', // professor
        ]);

        Bico::create([
            'name'        => 'Bico 3',
            'bomba_id'    => '1', // professor
        ]);
        
        Bico::create([
            'name'        => 'Bico 1',
            'bomba_id'    => '2',
        ]);

        Bico::create([
            'name'        => 'Bico 2',
            'bomba_id'    => '2', // professor
        ]);

        Bico::create([
            'name'        => 'Bico 3',
            'bomba_id'    => '2', // professor
        ]);

        Bico::create([
            'name'        => 'Bico 1',
            'bomba_id'    => '3',
        ]);

        Bico::create([
            'name'        => 'Bico 2',
            'bomba_id'    => '3', // professor
        ]);

        Bico::create([
            'name'        => 'Bico 3',
            'bomba_id'    => '3', // professor
        ]);

        Bico::create([
            'name'        => 'Bico 1',
            'bomba_id'    => '4',
        ]);

        Bico::create([
            'name'        => 'Bico 2',
            'bomba_id'    => '4', // professor
        ]);

        Bico::create([
            'name'        => 'Bico 1',
            'bomba_id'    => '5',
        ]);

        Bico::create([
            'name'        => 'Bico 2',
            'bomba_id'    => '5', // professor
        ]);
       
        Bico::create([
            'name'        => 'Bico 1',
            'bomba_id'    => '6',
        ]);

        Bico::create([
            'name'        => 'Bico 2',
            'bomba_id'    => '6', // professor
        ]);
    }
}
