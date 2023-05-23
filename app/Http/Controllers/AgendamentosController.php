<?php

namespace App\Http\Controllers;
use App\Models\Agendamentos;
use Illuminate\Http\Request;


class AgendamentosController extends Controller
{
    public function store(Request $request)
    {

        //Enviando para o banco e dados
        $agendamentos = new Agendamentos();
        $agendamentos->nome = $request->nome;
        $agendamentos->telefone = $request->telefone;
        $agendamentos->origem = $request->origem;
        $agendamentos->data_contato = $request->contato;
        $agendamentos->observacao = $request->observacao;
        $agendamentos->save();

        //Retornando para o Formulário
        return redirect()->route('index')
        ->with('success', 'Agendamento criado com sucesso!');
    }

    public function show(){

        $tableagenda = Agendamentos::all();

        return view('consulta', ['agendamentos' => $tableagenda]);
    }
}
?>