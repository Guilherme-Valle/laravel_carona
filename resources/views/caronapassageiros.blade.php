@extends('welcome')

@section('title', 'Caronapassageiro')

@section('content')
    
            <thead>
                <th>Id_Carona</th>
                <th>Id_Passageiro</th>
                <th>Avaliacao_passageiro</th>
                <th>avaliacao_motorista</th>
                <th>Comentario_passageiro</th>
                <th>comentario_motorista</th>
            </thead>
            <tbody>
                @foreach($caronapassageiros as $carona)
                    <tr>
                        <td>{{ $carona->id_carona }} </td>
                        <td>{{ $carona->id_passageiro }}</td>
                        <td>{{ $carona->avaliacao_passageiro }} </td>
                        <td>{{ $carona->avaliacao_motorista }}</td>
                        <td>{{ $carona->comentario_passageiro }}</td>
                        <td>{{ $carona->comentario_motorista }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
