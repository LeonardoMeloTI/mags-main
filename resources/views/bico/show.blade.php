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
        <li>ID:                   {{ $bico->id    }}        </li>
        <li>Nome:                 {{ $bico->name  }}        </li>
        <li>Bomba-Nome:           {{ $bico->bomba->name}}   </li>
        <li>Bomba-Modelo:         {{ $bico->bomba->modelo}} </li>
        <li>Bomba-ID:             {{ $bico->bomba->id}}     </li>
        <li>Criação:              {{ Carbon\Carbon::parse($bico->create_at)->format('d/m/Y H:i') }} </li>
        <li>Última modificação:   {{ Carbon\Carbon::parse($bico->update_at)->format('d/m/Y H:i') }} </li>


    </ul>
    
    <a href="{{ URL::to('bico/') }}">Voltar</a>
</body>
</html>