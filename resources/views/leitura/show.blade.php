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
        <li>Criação:              {{ Carbon\Carbon::parse($leitura->create_at)->format('d/m/Y H:i') }} </li>
        <li>Última modificação:   {{ Carbon\Carbon::parse($leitura->update_at)->format('d/m/Y H:i') }} </li>
        {{-- <li>Nome:                 {{ $leitura->name }}      </li> --}}
        <li>Bomba:                {{ $leitura->bomba->id}}     </li>
        <li>Bico:                 {{ $leitura->bico->id }}     </li>
        <li>Turno:                {{ $leitura->turno_id}}   </li>
        <li>Leitura:              {{ $leitura->leitura  }}     </li>

    </ul>
    
    <a href="{{ URL::to('leitura/') }}">Voltar</a>
</body>
</html>