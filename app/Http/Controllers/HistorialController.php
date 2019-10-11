<?php

namespace App\Http\Controllers;
use App\Models\Historial;
use App\Models\Paciente;

use Illuminate\Http\Request;

class HistorialController extends Controller
{
    
    public function store(Request $request){
        
        //2T2vnmglbNenaXWTwP4HaRxjMmgakxgWqN2WByZz
        $historial = new Historial;
        $historial->fecha = $request->fecha;
        $historial->sintomas = $request->sintomas;
        $historial->cuadro_clinico = $request->cuadro_clinico;
        $historial->paciente_id = $request->paciente_id;

        $historial->save();
        
        return $historial;
    }
}
