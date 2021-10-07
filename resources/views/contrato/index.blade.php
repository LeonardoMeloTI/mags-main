<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listando Contratos</title>
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
                <th>Contrato - </th>
                <th></th>
          

            </tr>
        </thead>
        <tbody>
 
          @foreach($contratos as $key => $value)
            <tr>
                <td>{{ $value->name}}</td>
                {{-- <td>{{ $value->status}}</td> --}}
                <td>
                    <a href="{{ URL::to('contrato/' . $value->id) }}">Visualizar</a>
                </td>

                {{-- <td>
                    <a href="{{ URL::to('contrato/' . $value->id . '/edit') }}">Editar</a>
                </td> --}}

                {{-- <td>        
                    {{ Form::open(array('url' => 'contrato/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td> --}}

            </tr>
           @endforeach
 
        </tbody>
    </table>

        {{-- Botão para criar contrato --}}
        <a href="{{ URL::to('contrato/create') }}"><h2>Criar Novo Contrato</h2></a>

        @if (Session::has('message'))
            <div> {{ Session::get('message') }} </div>      
        @endif

    

</body>
</html>
