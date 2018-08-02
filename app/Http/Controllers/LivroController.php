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

    public function remover($id) {
        $livro = Livro::find($id);
        $livro->delete();
        return redirect()->action("LivroController@listagem");
    }
}
