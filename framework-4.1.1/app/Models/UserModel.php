<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
 	 #Configuración del modelo.
	protected $table      = 'usuario';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;


    protected $allowedFields = ['id','user', 'email','password','flag'];
    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

	#Metodo para buscar todos los datos de la tabla de usuarios

}