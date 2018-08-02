<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function listagem() {
        return "<h1>Listagem de livros</h1>";
    }
}
