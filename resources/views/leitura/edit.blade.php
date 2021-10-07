<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Leitura</title>
</head>
<body>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                    <li> {{$errors}} </li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($leitura, array('route' => array('leitura.update', $leitura->id), 'method' => 'PUT' )) }}
 
    {{-- {{ Form::label('name', 'Nome') }} --}}
    {{-- {{ Form::text('name', $leitura->name) }} --}}
    <br/>
    {{ Form::label('bomba_id', 'Bomba') }}
    {{ Form::select('bomba_id', $bomba) }}

    <br/>
    {{ Form::label('bico_id', 'Bico') }}
    {{ Form::text('bico_id', $bico) }}
    <br/>
    {{ Form::label('turno_id', 'Turno') }}
    {{ Form::text('turno_id', null) }}
    <br/>
    {{ Form::label('leitura', 'Leitura') }}
    {{ Form::text('leitura',  null) }}
    <br/>

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    @if (Session::has('message'))
        <div> {{ Session::get('message') }} </div>      
    @endif
    
    <a href="{{ URL::to('leitura/') }}">Voltar</a>

</body>
</html>