<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/sobrenos', [SobreNosController::class, 'sobreNos']);
//tESTANDO COMMIT

//nome , categoria, assunto, mensagemm
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', 
function(string $nome, string $categoria, string $assunto, string $mensagem = 'Mensagem não informada'){
        echo 'Estamos aqui: '.$nome.' - '.$categoria.' - '.$assunto.' - '.$mensagem;
});


