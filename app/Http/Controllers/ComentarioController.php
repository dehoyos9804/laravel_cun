<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;
use App\Models\Noticia;
use App\Models\Comentario;

use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index(){
        //58vt3lLjjdC589hoyQxTxJw9N07LErbeL8jad8HJ
        //return csrf_token();
        $comment = Comentario::find(1);
        return $comment->comentable;
    }

    public function getNoticias(){
        $noticias = Noticia::find(2);
        return $noticias->comentarios;
    }

    //método que permite insertar datos con create
    public function storeCreate(Request $request){
        $pelicula = Pelicula::find(5);
        
        $pelicula->comentarios()->create(
            [
                'comentario' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam magni quod blanditiis, quae voluptates provident placeat asperiores quis dolorum debitis soluta porro veniam incidunt officiis recusandae repellat, ex rem.'
            ]
        );

        return $pelicula->comentarios;
    }

    //método que permite insertar datos con createMany
    public function storeCreateMany(Request $request){
        $noticia = Noticia::find(2);

        $noticia->comentarios()->createMany([
            ['comentario' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam magni quod blanditiis, quae voluptates provident placeat asperiores quis dolorum debitis soluta porro veniam incidunt officiis recusandae repellat, ex rem.'],
            ['comentario' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam magni quod blanditiis, quae voluptates provident placeat asperiores quis dolorum debitis soluta porro veniam incidunt officiis recusandae repellat, ex rem.']
        ]);

        return $noticia->comentarios;
    }
}
