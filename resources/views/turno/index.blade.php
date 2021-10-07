<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listando Turnos</title>
</head>
<body>
   
    <script>
        function ConfirmDelete() {
            return confirm('Tem certeza que deseja excluir este registro?');
        }
    </script>

    <table class="table no-margin">
        <thead>
            <tr>
                <th>ID</th>
                <th>Posto</th>
                <th>Nome</th>
                <th>Inicio do Turno</th>
                <th>Fim do Turno</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
 
          @foreach($turno as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->posto_id }}</td>
                <td>{{ $value->name }}</td>
                {{-- <td>{{ $value->horario_inicio }}</td>
                <td>{{ $value->horario_fim }}</td> --}}
                
                <td></td>
                <td>
                    <a href="{{ URL::to('turno/' . $value->id) }}">Visualizar</a>
                </td>

                <td>
                    <a href="{{ URL::to('turno/' . $value->id . '/edit') }}">Editar</a>
                </td>

                <td>        
                    {{ Form::open(array('url' => 'turno/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>

            </tr>
           @endforeach
 
        </tbody>
    </table>

        {{-- Botão para criar contrato --}}
        <a href="{{ URL::to('turno/create') }}"><h2>Criar</h2></a>

        @if (Session::has('message'))
            <div> {{ Session::get('message') }} </div>      
        @endif

    

</body>
</html>
