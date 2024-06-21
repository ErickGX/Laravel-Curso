<h3>KEKSON ULTIMATE</h3>

{{-- Comentario que sera descartado pelo blade --}}

{{'TESTE LARAVAL'}}
<hr>
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

<!-- 
            $var testada se nao estiver definida (isset)  condicao ?? valor default caso n atendida
                ou
            $var testada possuir valor null (valores como 0, ' ' , false , nao serao considerados)
    -->

{{-- @isset($fornecedores)
@for ($i = 0; isset($fornecedores[$i]); $i++)
    Fornecedor: {{ $fornecedores[$i]['nome']}}
        <br>
    Status : {{$fornecedores[$i]['status']}}
        <br>    
    CNPJ: {{$fornecedores[$i]['cnpj'] ?? 'Dado não foi informado/preenchido'}} <!--Operador condional de valor default -->
        <br>
    Telefone: ({{$fornecedores[$i]['ddd'] ?? 'Estado não foi definido'}}) {{$fornecedores[$i]['telefone'] ?? 'Telefone não foi informado/preenchido'}}
       <hr>     
   @endfor
@endisset


@php $i = 0 @endphp
@while (isset($fornecedores[$i]))

    Fornecedor: {{ $fornecedores[$i]['nome']}}
        <br>
    Status : {{$fornecedores[$i]['status']}}
        <br>    
    CNPJ: {{$fornecedores[$i]['cnpj'] ?? 'Dado não foi informado/preenchido'}} <!--Operador condional de valor default -->
        <br>
    Telefone: ({{$fornecedores[$i]['ddd'] ?? 'Estado não foi definido'}}) {{$fornecedores[$i]['telefone'] ?? 'Telefone não foi informado/preenchido'}}
        <hr>     
    @php $i++; @endphp
@endwhile
   --}}

  
@forelse($fornecedores as $indice => $fornecedor)
    
    Iteração atual {{$loop->iteration}} 
    <br>
   Fornecedor: {{ $fornecedor['nome']}}
        <br>
    Status : {{$fornecedor['status']}}
        <br>    
    CNPJ: {{$fornecedor['cnpj'] ?? 'Dado não foi informado/preenchido'}} <!--Operador condional de valor default -->
        <br>
    Telefone: ({{$fornecedor['ddd'] ?? 'Estado não foi definido'}}) {{$fornecedor['telefone'] ?? 'Telefone não foi informado/preenchido'}}
        <br>
        @if ($loop->first)
            {{-- This is the first iteration --}} primeira iteracao
        @endif
        
        @if ($loop->last)
            {{-- This is the last iteration --}}
            Ultima iteracao do loop
            total de registros : {{$loop->count}} 
        @endif
        
    <hr>
  
     @empty   
        Não existem fornedores cadastrados!!!
@endforelse
    {{-- @switch($fornecedores[0]['ddd'])
        @case(11)
            São Paulo - SP
            @break
        @case(21)
            Rio de Bosteiro - RJ
            @break
        @case(32)
            Juiz de Fora - MG
            @break
        @default
            Estado não informado
    @endswitch --}}






{{--Inversao do resultado que seria false para true para entrar no loop, se fornecedor ativo for diferente de S , entra na cond
@if ( !($fornecedores[0]['status'] == 'S')) 
    Fornecedor inativo
@endif --}}

{{--se o retorno da condicao for false ele executa, mais util para usar em negacoes, e inversao de resultados 
@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless  --}}


