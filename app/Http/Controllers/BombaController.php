<?php

namespace App\Http\Controllers;

use App\Models\Bomba;
use App\Models\Posto;
use App\Models\Bico;
use Illuminate\Http\Request;

class BombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Listar todos as Bombas
        $bombas= Bomba::orderBy('id', 'ASC')->get();
        //dd($bombas);
        return view('bomba.index', ['bomba' => $bombas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Criar Bomba
        return view('bomba.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Armazenar Bombas
        $message = [
            'bomba.required'    => 'O campo Bomba é obrigatório!',
            'modelo.required'   => 'O campo Modelo é obrigatório!',
            'posto_id.required' => 'O campo Posto é obrigatório!',
        ];
 
        $validateData = $request->validate([
            'bomba'    =>  'required', //o campo não pode ser vazio
            'modelo'   =>  'required', //o campo não pode ser vazio 
            'posto_id' =>  'required', //o campo não pode ser vazio 
 
         ], $message);

        $bomba = new Bomba;
        $bomba->name      =  $request->name;
        $bomba->modelo    =  $request->modelo;
        $bomba->posto_id  =  $request->posto_id;
        $bomba->save();
 
        return redirect()->route('bomba.index')->with('message', 'Bomba criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bomba  $bomba
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Visualizar Bombas
        $bomba = Bomba::findOrFail($id);
        // dd($posto);
        return view('bomba.show', ['bomba' => $bomba]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bomba  $bomba
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //Editar Bomba
        $bomba = Bomba::findOrFail($id);
        return view('bomba.edit', ['bomba' => $bomba]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bomba  $bomba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Armazenar Bombas
       $message = [
        'bomba.required'    => 'O campo Bomba é obrigatório!',
        'modelo.required'   => 'O campo Modelo é obrigatório!',
        'posto_id.required' => 'O campo Modelo é obrigatório!',
    ];

    $validateData = $request->validate([
        'bomba'     =>  'required', //o campo não pode ser vazio
        'modelo'    =>  'required', //o campo não pode ser vazio
        'posto_id'  =>  'required', //o campo não pode ser vazio 
     ], $message);

    $bomba = Bomba::findOrFail($id);
    $bomba->name      =   $request->name;
    $bomba->modelo    =   $request->modelo;
    $bomba->posto_id  =   $request->posto_id;
    $bomba->save();

    return redirect()->route('bomba.index')->with('message', 'Bomba editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bomba  $bomba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bomba $bomba)
    {
        //
    }
}
