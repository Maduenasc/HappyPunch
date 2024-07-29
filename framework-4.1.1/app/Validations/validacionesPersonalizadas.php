<?php

namespace App\Validations;
use App\Models\userModel;
class validacionesPersonalizadas{

	#Validación de las fechas
	function date_check(string $str,string &$error = null): bool
	{
		if($str < date('Y-m-d'))
			return false;
		return true;

	}

	#Regla para validar el correo
	public function validarUsuario(string $str, string $fields, array $data){
    $model = new UserModel();
    $user = $model->where('email', $data['correo'])
                  ->first();

    if(!$user)
      return false;

  	if(md5($data['contraseña'])== $user->password)
  		return true;
  	return false;

  }

}