<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UtilizadorSeeder extends Seeder
{
    public function run()
    {
        $utilizadorModel = new \App\Models\UtilizadorModel;

        $utilizador = [

            'nome' => 'Paulo Santiago',
            'email' => 'paulosantiago9@gmail.com',
            'bi' => '301169',
            'telefone' => '9774578',
        ];

        $utilizadorModel->protect(false)->insert($utilizador);


        $utilizador = [

            'nome' => 'Deolinda Ramos',
            'email' => 'deolassramos@gmail.com',
            'bi' => '163976',
            'telefone' => '9944891',
        ];

        $utilizadorModel->protect(false)->insert($utilizador);

        dd($utilizadorModel->errors());
    }
}
