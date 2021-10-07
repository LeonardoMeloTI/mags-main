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
    <li>ID:                   {{ $user->id }}        </li>
    <li>Nome:                 {{ $user->name }}      </li>
    <li>Email:                {{ $user->email }}     </li>
    <li>Celular:              {{ $user->cell }}      </li>
    <li>Tel:                  {{ $user->tel }}       </li>
    <li>Criação:              {{ Carbon\Carbon::parse($user->create_at)->format('d/m/Y H:i') }} </li>
    <li>Última modificação:   {{ Carbon\Carbon::parse($user->update_at)->format('d/m/Y H:i') }} </li>
</ul>
 
 
</body>
</html>
