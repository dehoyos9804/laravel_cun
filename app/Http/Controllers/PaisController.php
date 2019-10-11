<?php

namespace App\Http\Controllers;
use App\Models\Pais;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index()
    {
        
        $pais = Pais::find(1);
        return $pais->publicaciones;
        //return csrf_token();
    }
}
