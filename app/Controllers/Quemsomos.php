<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
//use App\Models\AtivaLink;

class Quemsomos extends BaseController
{
    public function index()
    {
        
        $x = [];
        return view('quemsomos',$x);
    }
}
