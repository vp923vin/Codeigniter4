<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Hello extends Controller
{
    
    public function index()
    {
        return 'Hellboy';
    }
    public function user( $name)
    {
        return 'Hello '. $name;
    }
    public function _remap(){
        echo "VIpin PAtel";
    }
}
