<h3>Forncedor</h3>

{{--Cometario que é descartado no blade --}}

@php
/*
if(){

}elseif(){

}else(){

}
    if(empyty($variavel)) {}// retorna ture se a variavel estiver vazia. Exemplo de vaiaveis vazias:

    - ''
    - 0
    - '0'
    - Null
    - false
    - array()
    - $var 
*/

@endphp


@isset($fornecedores)

@forelse($fornecedores as $indice => $fornecedor)
    Fornecedor: {{ $fornecedores[$i]['nome']}}
    <br>
    Status: {{$fornecedores[$i]['status']}}
    <br>
    CNPJ: {{$fornecedores[$i]['cnpj'] ?? 'Dados não foi preenchido'}}
    <br>
    telefooone:  {{$fornecedores[$i]['ddd'] ?? ''}}  {{$fornecedores[0]['telefone'] ?? ''}}
    <hr>
@empty
    Não existem fornecedores cadastrados
     @endforelse
@endisset

    @switch ($fornecedores[1]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de fora - MG
            @break
        @case('85')
            Fortaleza - Cometario
            @break
            estado não identificado
    @endswitch


