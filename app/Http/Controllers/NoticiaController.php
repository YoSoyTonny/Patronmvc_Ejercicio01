<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;

class NoticiaController extends Controller
{
    public function index() {

        $noticias = Noticia::all();

        $argumentos = array();
        $argumentos['noticias'] = $noticias;
        return view('noticias.index', $argumentos);
    }
};
