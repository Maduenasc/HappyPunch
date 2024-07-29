<?php

namespace App\Controllers;
use CodeIgniter\controller;

class Pages extends BaseController
{

	public function view($page = 'home')
	{
		if( !is_file(APPPATH.'/views/pages/'.$page.'.php')){
			//No tenemos pagina con la que empezar
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		//Pone en mayuscula la 1º letra.
		$data['title'] = ucfirst($page);


		echo view('templates/header',$data);
		echo view('pages/'.$page,$data);
		echo view('templates/footer',$data);
	}

	public function reserva($page = 'reserva')
	{
		if( !is_file(APPPATH.'/views/pages/'.$page.'.php')){
			//No tenemos pagina con la que empezar
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		//Pone en mayuscula la 1º letra.
		$data['title'] = ucfirst($page);


		echo view('templates/header',$data);
		echo view('pages/'.$page,$data);
		echo view('templates/footer',$data);
	}

	public function material($page = 'material')
	{

		if( !is_file(APPPATH.'/views/pages/'.$page.'.php')){
			//No tenemos pagina con la que empezar
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		//Pone en mayuscula la 1º letra.
		$data['title'] = ucfirst($page);


		echo view('templates/header',$data);
		echo view('pages/'.$page,$data);
		echo view('templates/footer',$data);
	}
}
