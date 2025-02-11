<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){

        $motivo_contatos = MotivoContato::all();


        return view('site.contato', ['titulo'  => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);

    }    

        
    public function salvar (Request $request){
         SiteContato::create($request->all());

         $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'motivo_contato' => $motivo_contatos,
            'mensagem' => 'required|max:2000'
         ]);

    }
}
   
