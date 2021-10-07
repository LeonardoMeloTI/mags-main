<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Bico</title>
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

    {{ Form::model($bico, array('route' => array('bico.update', $bico->id), 'method' => 'PUT' )) }}
 
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', $bico->name) }}
    <br/>
    {{ Form::label('bomba', 'Bomba') }}
	{{ Form::select('bomba_id', $bombas) }}
    <br/>
 

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    @if (Session::has('message'))
        <div> {{ Session::get('message') }} </div>      
    @endif
    
    <a href="{{ URL::to('bico/') }}">Voltar</a>

</body>
</html>