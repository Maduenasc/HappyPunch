<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminFilters implements FilterInterface{

    public function before(RequestInterface $request, $arguments = null){
    		if(!session('isLoggedIn'))
			return redirect()->to(site_url());
		else if(session('rol')!=0)
			return redirect()->to(site_url('admin/admin_403'));
	}

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}