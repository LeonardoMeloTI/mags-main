<?php

namespace App\Http\Controllers;

use App\Models\Leitura;
use App\Models\Turno;
use Illuminate\Http\Request;

class LeituraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Listar todos as Leituras
        $leituras = Leitura::orderBy('updated_at', 'ASC')->get();
        //dd($postos);
        return view('leitura.index', ['leitura' => $leituras]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Criar posto
        return view('leitura.create');

        $bombas = Bomba::pluck('name', 'id');
        return view('leitura.create',['bombas' => $bombas]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Armazenar Leituras
        $message = [
            'bomba_id.required' => 'O campo Bomba é obrigatório!',
            'bico_id.required'  => 'O campo Bico é obrigatório!',
            'turno_id.required' => 'O campo Turno é obrigatório!', 
            'leitura.required'  => 'O campo Leitura é obrigatório!', 
            'leitura.min'       => 'O campo Leitura precisa ter no mínimo :min caracteres!', 
        ];
 
        $validateData = $request->validate([
            'bomba_id'  =>  'required', //o campo não pode ser vazio
            'bico_id'   =>  'required', //o campo não pode ser vazio 
            'turno_id'  =>  'required', //o campo não pode ser vazio  
            'leitura'   =>  'required|min:6' //o campo não pode ser vazio e deve ter no mínimo 6 caracteres  
         ], $message);

        $leitura = new Leitura;
        // $leitura->name   =  $request->name;
        $leitura->bomba_id  =  $request->bomba_id;
        $leitura->bico_id   =  $request->bico_id;
        $leitura->turno_id  =  $request->turno_id;
        $leitura->leitura   =  $request->leitura;
        $leitura->save();
 
        return redirect()->route('leitura.index')->with('message', 'Leitura criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //Visualizar Leituras
         $leitura = Leitura::findOrFail($id);
         // dd($posto);
         return view('leitura.show', ['leitura' => $leitura]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Editar Leitura
        $leitura = Leitura::findOrFail($id);
        $bombas  = Bomba::pluck('name', 'id');
        $bicos   = Bico::pluck('name', 'id');
        return view('leitura.edit', ['leitura' => $leitura, 'bombas' => $bombas, 'bicos' => $bicos]);

    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // Armazenar Leituras
       $message = [
        'bomba_id.required' => 'O campo Bomba é obrigatório!',
        'bico_id.required'  => 'O campo Bico é obrigatório!',
        'turno_id.required' => 'O campo Turno é obrigatório!', 
        'leitura.required'  => 'O campo Leitura é obrigatório!', 
        'leitura.min'       => 'O campo Leitura precisa ter no mínimo :min caracteres!', 
    ];

    $validateData = $request->validate([
        'bomba_id'  =>  'required', //o campo não pode ser vazio
        'bico_id'   =>  'required', //o campo não pode ser vazio 
        'turno_id'  =>  'required', //o campo não pode ser vazio  
        'leitura'   =>  'required|min:6' //o campo não pode ser vazio e deve ter no mínimo 6 caracteres  
     ], $message);

    $leitura = Leitura::findOrFail($id);
    $leitura->bomba_id  =   $request->bomba_id;
    $leitura->bico_id   =   $request->bico_id;
    $leitura->turno_id  =   $request->turno_id;
    $leitura->leitura   =   $request->leitura;
    $leitura->save();

    return redirect()->route('leitura.index')->with('message', 'Leitura editada com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
