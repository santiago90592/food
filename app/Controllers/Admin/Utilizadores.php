<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Utilizadores extends BaseController
{
    private $utilizadorModel;

    public function __construct(){

        $this->utilizadorModel = new \App\Models\UtilizadorModel();
    }

    public function index()

    {
        $data = [

            'titulo' => 'Listando os utilizadores',
            'utilizadores' => $this->utilizadorModel->findAll()
        ];
     
       return view('Admin/Utilizadores/index', $data);
    }
}

