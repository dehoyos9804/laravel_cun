<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Materia;

use Illuminate\Http\Request;
use App\Http\Requests\EstudianteRequest;

class EstudianteController extends Controller
{
    //YJGNV3mEEb3ueZvZOyTNpQav29ptcQim4RIKozgF

    //método que permite insertar datos con attach
    public function storeAttach(Request $request){
        $estudiante = Estudiante::find(1);
        $materia = Materia::all()->pluck('id')->toArray();
        $estudiante->materias()->attach($materia);

        return $estudiante->materias;
    }

    //método que permite insertar datos con el sync
    public function storeSync(Request $request){
        $estudiante = Estudiante::find(3);
        $materia = Materia::all()->pluck('id')->toArray();
        $estudiante->materias()->sync($materia);

        return $estudiante->materias;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstudianteRequest $request)
    {
        $data = $request->all();
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


}
