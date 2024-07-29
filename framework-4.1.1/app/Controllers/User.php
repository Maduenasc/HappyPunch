<?php

namespace App\Controllers;

use CodeIgniter\controller;
use App\Models\userModel;

class User extends BaseController
{
	public function login(){

			//titulo de la pagina
			$data = ['title' => 'iniciar Sesion'];

			//reglas de validación personalizada
			$rules = [
				'correo' => 'required|min_length[6]|max_length[50]|valid_email',
				'contraseña' => 'required|min_length[8]|max_length[255]|validarUsuario[correo,contraseña]',
			];
			//error personalizado. Mover a validation.php
			$errors = [
				'password' => [
					'validarUsuario' => 'Correo o contraseña incorrectos.'
				]
			];
			if ($this->request->getMethod() == 'post') {
				if (! $this->validate($rules, $errors)) {
					$data['validation'] = $this->validator;
				}else{
					$model = new UserModel();

					$user = $model->where('email', $this->request->getVar('correo'))->first();
					$this->setUserSession($user);

					return redirect()->to('profile');

					}
			}

			echo view('templates/header', $data);
			echo view('pages/login',$data);
			echo view('templates/footer');

		}


		
		private function setUserSession($user){

			$session = session();
			$data = [
				'id' => $user->id,
				'user' => $user->user,
				'email' => $user->email,
				'rol' => $user->flag,

				'isLoggedIn' => true,
			];

			$session->set($data);
			return true;
		}



		public function register(){
			$data = ['title' => 'Registrarse'];

			if ($this->request->getMethod() == 'post') {
				#Reglas de validacion.
				$rules = [
					'usuario' => 'required|min_length[3]|max_length[20]',
					'correo' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[usuario.email]',
					'contraseña' => 'required|min_length[8]|max_length[255]',
					'password_confirm' => 'matches[password]',
				];

				if (! $this->validate($rules)) {
					$data['validation'] = $this->validator;
				}else{

					$model = new UserModel();

					$newData = [
						'user' => $this->request->getVar('usuario'),
						'email' => $this->request->getVar('correo'),
						'password' => md5($this->request->getVar('contraseña')),
					];
					$searchUser = $model->where('email',$newData['email'])
                  ->first();



					//Ahora a comprobar que no existe el mismo usuario


					$model->save($newData);
					return redirect()->to('login');
					
				}
			}


			echo view('templates/header', $data);
			echo view('Pages/register',$data);
			echo view('templates/footer');
		}

		public function profile(){
			


			
			if(!session()->get('isLoggedIn')){
				return redirect()->to('login');
			}
			
			
			$model = new UserModel();
			if ($this->request->getMethod() == 'post') {
			}
			
			$data ['title'] = "Mi Zona";
			$data ['css']	= "profile.css";

			$data['user'] = $model->where('id', session()->get('id'))->first();
			echo view('templates/header', $data);
			echo view('Pages/profile',$data);
			echo view('templates/footer');
		}

		public function logout(){
			session()->destroy();
			return redirect()->to('/');
		}

}
