<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Leitura</title>
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

    {{ Form::open(array('url' => '/leitura/create')) }}
 
    {{-- {{ Form::label('name', 'Nome') }} --}}
    {{-- {{ Form::text('name', null) }} --}}
    <br/>
    {{ Form::label('bomba_id', 'Bomba') }}
    {{ Form::select('bomba_id',$bomba->id) }}
    <br/>

    {{ Form::label('bico_id', 'Bico') }}
    {{ Form::select('bico_id', $bico->id) }}
    <br/>

    {{ Form::label('turno_id', 'Turno') }}
    {{ Form::text('turno_id', $turno_id) }}
    <br/>

    {{ Form::label('leitura', 'Leitura') }}
    {{ Form::text('leitura', null) }}
    <br/>

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    <a href="{{ URL::to('leitura/') }}">Voltar</a>
    
</body>
</html>