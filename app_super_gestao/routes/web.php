<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/sobrenos', [SobreNosController::class, 'sobreNos']);



//aplicando Expressoes regulares nas rotas
Route::get(
        '/contato/{nome?}/{categoria_id?}', 
function(
        string $nome = 'Desconhecido', 
        int $categoria_id = 1, //  1 = 'informação
        ){
        echo 'Estamos aqui: '.$nome.' - '.$categoria_id;
}
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+'); //no item cat id recebe apenas do 0 a 9 e pelo menos 1 numero






//nome , categoria, assunto, mensagemm
//valores opcionais são passados da direita para a esquerda 

/*
Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}', 
function(
        string $nome = 'Desconhecido', 
        string $categoria = 'informação',
         string $assunto = 'Contato', 
         string $mensagem = 'Mensagem não informada')
         {
        echo 'Estamos aqui: '.$nome.' - '.$categoria.' - '.$assunto.' - '.$mensagem;
}); 
*/




