<?php

namespace App\Models;

use CodeIgniter\Model;

class UtilizadorModel extends Model
{
    
    protected $table = 'utilizadores';    
    protected $returnType = 'object';
    protected $useSoftDeletes = true;    
    protected $allowedFields = ['nome','email','telefone'];
    protected $useTimestamps = true;
    protected $createdField = 'criado_em';
    protected $updatedField = 'atualizado_em';
    protected $deletedField = 'deletado_em';

        
}
