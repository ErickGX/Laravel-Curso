<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobrenos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/login' , function(){ return 'login';})->name('site.login');

//names sao utilizados apenas dentro da logica da aplicacao, utilziando o helper  {{ route('site.index') }}, alterações nao refletem as rotas absolutas usando esse metodo
//qualquer alteração na rota diretamente /contato , posso mudar para /qualquer coisa que o helper ainda continua apontando para a rota absoluta

//agrupamento de rotas a partir de um prefixo comum / separar partes da aplicacoes
Route::prefix('/app')->group(function(){

        Route::get('/clientes' , function(){ return 'clientes';})->name('app.clientes');
        Route::get('/fornecedores' , function(){ return 'fornecedores';})->name('app.fornecedores');
        Route::get('/produtos' , function(){ return 'produtos';})->name('app.produtos');
});



/*
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




