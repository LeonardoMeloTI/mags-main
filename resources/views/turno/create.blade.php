<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Turno</title>
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

    {{ Form::open(array('url' => '/turno/create')) }}
 
    
    {{ Form::label('posto_id', 'Posto') }}
    {{ Form::select('posto_id', $postos) }}
    <br/>

    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null) }}
    <br/>

    {{-- {{ Form::label('horario_inicio', 'Inicio do Turno') }}
    {{ Form::select('horario_inicio', null) }}

    <br/>
    {{ Form::label('horario_fim', 'Fim do Turno') }}
    {{ Form::select('horario_fim', null) }}

    <br/>
  --}}

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    <a href="{{ URL::to('bico/') }}">Voltar</a>
    
</body>
</html>