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
        <li>ID:                   {{ $bomba->id    }}     </li>
        <li>Nome:                 {{ $bomba->name  }}     </li>
        <li>Modelo:               {{ $bomba->modelo }}     </li>
        <li>Bico:                 {{ $bomba->bico  }}     </li>
        <li>Criação:              {{ Carbon\Carbon::parse($bomba->create_at)->format('d/m/Y H:i') }} </li>
        <li>Última modificação:   {{ Carbon\Carbon::parse($bomba->update_at)->format('d/m/Y H:i') }} </li>


    </ul>
    
    <a href="{{ URL::to('bomba/') }}">Voltar</a>
</body>
</html>