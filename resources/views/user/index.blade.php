<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>

    <table class="table no-margin">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th></th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
 
          @foreach($users as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>

                <td>
                    <a href="{{ URL::to('user/' . $value->id) }}">Visualizar</a>
                </td>

                <td>
                    <a href="{{ URL::to('user/' . $value->id . '/edit') }}">Editar</a>
                </td>

                <td>                                 
                    {{ Form::open(array('url' => 'user/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>


            </tr>
           @endforeach
 
        </tbody>
    </table>

        @if (Session::has('message'))
          <div> {{ Session::get('message') }} </div>      
        @endif

        <script>
            function ConfirmDelete(){
                return confirm('Tem certeza que deseja excluir este registro?');
            }
        </script>


    
</body>
</html>