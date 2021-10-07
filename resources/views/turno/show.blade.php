<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar</title>
</head>
<body>
    
        <h2>Visualizar</h2>
    <ul>
        <li>ID:                   {{ $turno->id             }} </li>
        <li>Posto:                {{ $turno->posto->name    }} </li>
        <li>Nome:                 {{ $turno->name           }} </li>
        {{-- <li>Inicio do Turno:      {{ $turno->horario_inicio }} </li>
        <li>Fim do Turno:         {{ $turno->horario_fim    }} </li> --}}
        <li>Criação:              {{ Carbon\Carbon::parse($turno->create_at)->format('d/m/Y H:i') }} </li>
        <li>Última modificação:   {{ Carbon\Carbon::parse($turno->update_at)->format('d/m/Y H:i') }} </li>


    </ul>
    
    <a href="{{ URL::to('turno/') }}">Voltar</a>
</body>
</html>