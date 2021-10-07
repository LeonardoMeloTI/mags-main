<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contrato;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contrato::create([
            'cnpj'            => '07.739.067/0001-91',
            'name'            => 'João Pereira dos Santos',
            'proprietario_id' => '2',
            'email'           => 'joão_santos.contato@gmail.com',
            'cell'            => '2198645-8261',
            'tel'             => '212546-8965',
            'address'         => 'R. Estácio de Sá, 87 - Estácio, Rio de Janeiro - RJ, 20211-270',
            'status'          =>  1,
        ]);

        Contrato::create([
            'cnpj'            =>  '05.418.078/0001-92',
            'name'            =>  'Marcos da Silva dos Santos',
            'proprietario_id' =>  '3',
            'email'           =>  'marcos.silva_contato@gmail.com',
            'cell'            =>  '2198745-8272',
            'tel'             =>  '212545-8875',
            'address'         =>  'R. Maia de Lacerda, 36 - Estácio Rio de Janeiro - RJ 20250-001',
            'status'          =>  1,
        ]);
    }
}
