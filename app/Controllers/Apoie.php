<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Apoie extends BaseController
{
    public function index()
    {
        $x = [];
        return view('apoie',$x);
    }
}
