<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Contato extends BaseController
{
    public function index()
    {
        $x = [];
        return view('contato',$x);
    }
}
