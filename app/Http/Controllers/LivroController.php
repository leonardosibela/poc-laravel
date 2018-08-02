<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function listagem() {
        return view('livro.listagem');
    }
}
