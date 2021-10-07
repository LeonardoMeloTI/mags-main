<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Bomba</title>
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

    {{ Form::open(array('url' => '/bomba/create')) }}
 
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null) }}
    <br/>
    {{ Form::label('modelo', 'Modelo') }}
    {{ Form::text('modelo', null) }}
    <br/>
    {{ Form::label('posto_id', 'Posto') }}
    {{ Form::text('posto_id', null) }}
    <br/>
    {{-- Mudar para posto_id --}}

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    <a href="{{ URL::to('bomba/') }}">Voltar</a>
    
</body>
</html>