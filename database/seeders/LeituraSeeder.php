<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leitura;


class LeituraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leitura::create([
            'bico_id'     => '1',
            'turno_id'    => '1',
            'leitura'    => '131416',
            'data'       => '2021-10-06',
        ]);

        Leitura::create([
            'bico_id'     => '1',
            'turno_id'    => '2',
            'leitura'    => '131416',
            'data'       => '2021-10-06',
        ]);

        Leitura::create([
            'bico_id'     => '1',
            'turno_id'    => '3',
            'leitura'    => '131416',
            'data'       => '2021-10-06',
        ]);

        Leitura::create([
            'bico_id'     => '2',
            'turno_id'    => '1',
            'leitura'    => '131416',
            'data'       => '2021-10-06',
        ]);

        Leitura::create([
            'bico_id'     => '2',
            'turno_id'    => '2',
            'leitura'    => '131416',
            'data'       => '2021-10-06',
        ]);

        Leitura::create([
            'bico_id'     => '2',
            'turno_id'    => '3',
            'leitura'    => '131416',
            'data'       => '2021-10-06',
        ]);

        Leitura::create([
            'bico_id'     => '3',
            'turno_id'    => '1',
            'leitura'    => '131416',
            'data'       => '2021-10-06',
        ]);

        Leitura::create([
            'bico_id'     => '3',
            'turno_id'    => '2',
            'leitura'    => '131416',
            'data'       => '2021-10-06',
        ]);

        Leitura::create([
            'bico_id'     => '3',
            'turno_id'    => '3',
            'leitura'    => '131416',
            'data'       => '2021-10-06',
        ]);
    }
}
