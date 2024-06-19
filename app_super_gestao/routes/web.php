<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobrenos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/login' , function(){ return 'login';})->name('site.login');

//names sao utilizados apenas dentro da logica da aplicacao, utilziando o helper  {{ route('site.index') }}, alterações nao refletem as rotas absolutas usando esse metodo
//qualquer alteração na rota diretamente /contato , posso mudar para /qualquer coisa que o helper ainda continua apontando para a rota absoluta

Route::prefix('/app')->group(function(){ //agrupamento de rotas a partir de um prefixo comum / separar partes da aplicacoes

        Route::get('/clientes' , function(){ return 'clientes';})->name('app.clientes');
        Route::get('/fornecedores' , [FornecedorController::class, 'index'])->name('app.fornecedores');
        Route::get('/produtos' , function(){ return 'produtos';})->name('app.produtos');
});


Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('site.teste');



Route::get('/rota1', function(){
        echo 'rota1';
})->name('site.rota1');


//redirecionamento de uma rota para outra
Route::get('/rota2', function(){
        return redirect()->route('site.rota1');        
})->name('site.rota2');


//qualquer rota nao existente acessada o usuario sera redirecionado para esta rota de contigencia , uma view trabalhada pode ser usada etc.
Route::fallback(function(){
        echo 'A rota acessada não existe. <a href="'.route('site.index').'"> clique aqui </a> para a página indicada';
});


//metodo redirect diretamente um dos meios
//Route::redirect('/rota2', '/rota1');



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




