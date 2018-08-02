<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class LivroController extends Controller
{
    public function listagem() {
        $livros = Livro::all();
        return view('livro.listagem')->with("livros", $livros);
    }
}
