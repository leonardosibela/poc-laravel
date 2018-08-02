<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';
    public $timestamps = false;
    protected $fillable = array('nome', 'autor', 'valor', 'quantidade');
}
