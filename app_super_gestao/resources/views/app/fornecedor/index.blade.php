<h3>KEKSON ULTIMATE</h3>

{{-- Comentario que sera descartado pelo blade --}}

{{'TESTE LARAVAL'}}
<br>
@php
/*
   if (isset($variavel){  //retorna true se a var estiver definida (isset($variavel)

   }elseif (condition) {
    # code...
   }else {
    # code...
   } */
@endphp

{{--@dd($fornecedores) 

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
        <h3>Existem alguns fornecedores cadastrados</h3>
     @elseif (count($fornecedores) > 10)
             <h3>Existem muitos fornecedores cadastrados</h3>
        @else
                 <h3>Nao existem fornecedores cadastrados</h3>    
@endif --}}

{{--Isset é usado para verificar se alguma variavel/indices de arrays esta setada/existe
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome']}}
        <br>
    Status : {{$fornecedores[0]['status']}}
        <br>
    @isset($fornecedores[0]['cnpj'])    
        CNPJ: {{$fornecedores[0]['cnpj']}}
            @empty($fornecedores[0]['cnpj']): empry verifica se a variavel/array tem um valor vazio  0/null/false/0.0/" "/  
            --Vazio   
            @endempty
    @endisset    
@endisset --}}


@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome']}}
        <br>
    Status : {{$fornecedores[0]['status']}}
        <br>    
    CNPJ: {{$fornecedores[0]['cnpj'] ?? 'Dado não foi informado/preenchido'}} <!--Operador condional de valor default -->
    <!-- 
            $var testada nao estiver definida (isset)
                ou
            $var testada possuir valor null (valores como 0, ' ' , false , nao serao considerados)
    -->
@endisset



{{--Inversao do resultado que seria false para true para entrar no loop, se fornecedor ativo for diferente de S , entra na cond
@if ( !($fornecedores[0]['status'] == 'S')) 
    Fornecedor inativo
@endif --}}

{{--se o retorno da condicao for false ele executa, mais util para usar em negacoes, e inversao de resultados 
@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless  --}}


