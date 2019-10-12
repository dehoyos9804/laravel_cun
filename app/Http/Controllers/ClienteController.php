<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        //2T2vnmglbNenaXWTwP4HaRxjMmgakxgWqN2WByZz
        $cliente = Cliente::find(1);
        return $cliente;
        //return csrf_token();
    }

    //método que permite guardar con saveMany
    public function store(Request $request){
        $cliente = Cliente::find(1);
        $fecha = new \Carbon\Carbon();

        $cliente->pedidos()->saveMany([
            new Pedido([
                'fecha' => $fecha->format('Y-m-d'),
                'cliente_id' => Cliente::inRandomOrder()->value('id'),
            ]),
            new Pedido([
                'fecha' => $fecha->format('Y-m-d'),
                'cliente_id' => Cliente::inRandomOrder()->value('id'),
            ])
        ]);

        return $cliente->pedidos;
    }

    //método que permite guardar con create many
    public function guardarCreate(Request $request)
    {
        $cliente = Cliente::find(1);
        $fecha = new \Carbon\Carbon();

        $cliente->pedidos()->createMany([
            [
                'fecha' => $fecha->format('Y-m-d'),
                'cliente_id' => Cliente::inRandomOrder()->value('id'), 
            ],
            [
                'fecha' => $fecha->format('Y-m-d'),
                'cliente_id' => Cliente::inRandomOrder()->value('id'),
            ]
        ]);

        return $cliente->pedidos;
    }
}
