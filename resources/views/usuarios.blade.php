@extends('welcome')

@section('title', 'Usuarios')

@section('content')
  
            <thead>
                <th>Id</th>
                <th>Cpf</th>
                <th>Nome</th>
                <th>Data_de_nascimento</th>
                <th>Avaliacao_motorista</th>
                <th>Avaliacao_passageiro</th>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }} </td>
                        <td>{{ $usuario->cpf }}</td>
                        <td>{{ $usuario->nome }}</td>
                        <td>{{ $usuario->data_de_nascimento }}</td>
                        <td>{{ $usuario->avaliacao_motorista }}</td>
                        <td>{{ $usuario->avaliacao_passageiro }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
