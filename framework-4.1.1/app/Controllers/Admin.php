<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Admin extends BaseController
{	
	public function AdminProfile(){
			
			$data = ['title'] = "Administración";
			$data = ['css']	= "profile.css";
			
			echo view('templates/header', $data);
			echo view('Pages/profile',$data);
			echo view('templates/footer');
		}
}
