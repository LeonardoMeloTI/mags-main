<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Posto</title>
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

    {{ Form::open(array('url' => '/posto/create')) }}
 
    {{ Form::label('cnpj', 'CNPJ') }}
    {{ Form::text('cnpj', null) }}
    <br/>

    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null) }}
    <br/>

    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', null) }}
    <br/>

    {{ Form::label('cell', 'Celular') }}
    {{ Form::text('cell', null) }}
    <br/>

    {{ Form::label('tel', 'Telefone') }}
    {{ Form::text('tel', null) }}
    <br/>

    {{ Form::label('address', 'Endereço') }}
    {{ Form::text('address', null) }}
    <br/>

    {{ Form::label('contrato_id', 'Contrato') }}
    {{ Form::select('contrato_id', $contratos) }}
    <br/>

    {{-- {{ Form::label('gerente_id', 'Gerente') }}
    {{ Form::text('gerente_id', null) }} --}}
    <br/>

    {{ Form::label('bomba_id', 'Bomba') }}
    {{ Form::text('bomba_id', null) }}
    <br/>

    {{ Form::label('bico_id', 'Bico') }}
    {{ Form::text('bico_id', null) }}
    <br/>

    {{ Form::label('turno_id', 'Quantidade de Turnos') }}
    {{ Form::text('turno_id', null) }}
    <br/>

    {{ Form::label('cicloTurno', 'Ciclo do Turno') }}
    {{ Form::text('cicloTurno', null) }}
    <br/>

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    <a href="{{ URL::to('posto/') }}">Voltar</a>
    
</body>
</html>

