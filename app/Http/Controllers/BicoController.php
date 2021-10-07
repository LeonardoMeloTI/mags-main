<?php

namespace App\Http\Controllers;

use App\Models\Bico;
use App\Models\Bomba;
use Illuminate\Http\Request;

class BicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Listar todos os Bicos
        $bicos = Bico::orderBy('id', 'ASC')->get();
        //dd($bicos);
        return view('bico.index', ['bico' => $bicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Criar Bico
        $bomba = Bomba::pluck('name', 'id');
        return view('bico.create', ['bomba' => $bomba]);
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bico = new Bico;
        $bico->name     =   $request->name;
        $bico->bomba_id =   $request->bomba_id;
        $bico->save();

        return redirect()->route('bico.index')->with('message', 'Bico criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bico  $bico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Visualizar Bicos
        $bico = Bico::findOrFail($id);
        // dd($bico);
        return view('bico.show', ['bico' => $bico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bico  $bico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Editar Bico
        $bico = Bico::findOrFail($id);
        return view('bico.edit', ['bico' => $bico]);

        $bombas = Bomba::pluck('name', 'id');
		return view('bico.edit',['bico' => $bico, 'bomba' => $bombas]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bico  $bico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Armazenar Bicos

    $bico = Bico::findOrFail($id);
    $bico->name         =    $request->name;
    $bico->bomba_id     =    $request->bomba_id;
    $bico->save();

    return redirect()->route('bico.index')->with('message', 'Bico editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bico  $bico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bico $bico)
    {
        //
    }
}
