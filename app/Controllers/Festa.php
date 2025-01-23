<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Festa extends BaseController
{
    public function index()
    {
        $x = [];
        return view('festa',$x);
    }
}
