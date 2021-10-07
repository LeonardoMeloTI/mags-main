<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Contrato</title>
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

    {{ Form::model($contrato, array('route' => array('contrato.update', $contrato->id), 'method' => 'PUT' )) }}
 
    {{ Form::label('cnpj', 'CNPJ') }}
    {{ Form::text('cnpj', $contrato->cnpj) }}
    <br/>
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name',  $contrato->name) }}
    <br/>
    {{ Form::label('proprietario_id', 'Proprietário') }}
    {{ Form::text('proprietario_id', $contrato->proprietario_id) }}
    <br/>
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email',  $contrato->email) }}
    <br/>
    {{ Form::label('cell', 'Celular') }}
    {{ Form::text('cell', $contrato->cell) }}
    <br/>
    {{ Form::label('tel', 'Telefone') }}
    {{ Form::text('tel',  $contrato->tel) }}
    <br/>
    {{ Form::label('address', 'Endereço') }}
    {{ Form::text('address',  $contrato->address) }}
    <br/>
    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    @if (Session::has('message'))
        <div> {{ Session::get('message') }} </div>      
    @endif
    
    <a href="{{ URL::to('contrato/') }}">Voltar</a>

</body>
</html>