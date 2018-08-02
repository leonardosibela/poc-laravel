<?php

Route::get('/livros', "LivroController@listagem");
Route::delete('/livros/remover/{$id}', "LivroController@remover");