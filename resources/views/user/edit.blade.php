<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editt</title>
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
    
        {{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT' )) }}
    
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', $user->name) }}
    </br>
    
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', $user->email) }}
    </br>

        {{ Form::label('cell', 'Celular') }}
            {{ Form::text('cell', $user->cell) }}
    </br>

        {{ Form::label('tel', 'Telefone') }}
            {{ Form::text('tel', $user->tel) }}
    </br>
    
        {{ Form::submit('Enviar') }}
    
        {{ Form::close() }}
</body>
</html>