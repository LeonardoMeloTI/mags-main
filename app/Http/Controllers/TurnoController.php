<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use App\Models\Leitura;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Listar todos os Turnos
        $turnos= Turno::orderBy('id', 'ASC')->get();
        //dd($turnos);
        return view('turno.index', ['turno' => $turnos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Criar Turno
        return view('turno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Armazenar Turnos
        $message = [
            'name.required'             => 'O campo Nome do Turno é obrigatório!',
            // 'horario_inicio.required'   => 'O campo Inicio do Turno é obrigatório!',
            // 'horario_fim.required'      => 'O campo Fim do Turno é obrigatório!',
        ];
 
        $validateData = $request->validate([
            'name'              =>  'required', //o campo não pode ser vazio
            // 'horario_inicio'    =>  'required', //o campo não pode ser vazio 
            // 'horario_fim'       =>  'required', //o campo não pode ser vazio 
 
         ], $message);

        $turno = new Turno;
        $turno->name            =  $request->name;
        // $turno->horario_inicio  =  $request->horario_inicio;
        // $turno->horario_fim     =  $request->horario_fim;
        $turno->save();
 
        return redirect()->route('turno.index')->with('message', 'Turno criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Visualizar Turnos
        $turno = Turno::findOrFail($id);
        // dd($turno);
        return view('turno.show', ['turno' => $turno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Editar Turno
        $turno = Turno::findOrFail($id);
        return view('turno.edit', ['turno' => $turno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = [
            'name.required'             => 'O campo Nome do Turno é obrigatório!',
            // 'horario_inicio.required'   => 'O campo Inicio do Turno é obrigatório!',
            // 'horario_fim.required'      => 'O campo Fim do Turno é obrigatório!',
        ];
 
        $validateData = $request->validate([
            'name'              =>  'required', //o campo não pode ser vazio
            // 'horario_inicio'    =>  'required', //o campo não pode ser vazio 
            // 'horario_fim'       =>  'required', //o campo não pode ser vazio 
 
         ], $message);

        $turno = Turno::findOrFail($id);
        $turno->name            =  $request->name;
        // $turno->horario_inicio  =  $request->horario_inicio;
        // $turno->horario_fim     =  $request->horario_fim;
        $turno->save();
 
        return redirect()->route('turno.index')->with('message', 'Turno editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Deletar Turno
        // dd('DESTROY');
        $turno = Turno::findOrFail($id);
        $turno->delete();
 
        return redirect()->route('turno.index')->with('message', 'Turno excluído com sucesso!');
    }
}
