@extends('welcome')

@section('title', 'Caronas')

@section('content')
            <thead>
                <th>Id</th>
                <th>Id_carro</th>
                <th>Horario_inicio</th>
                <th>Horario_final</th>
                <th>Data</th>
                <th>Velocidade media</th>
                <th>Id destino</th>
            </thead>
            <tbody>
                @foreach($caronas as $carona)
                    <tr>
                        <td>{{ $carona->id }} </td>
                        <td>{{ $carona->id_carro }}</td>
                        <td>{{ $carona->horario_inicio }} </td>
                        <td>{{ $carona->horario_final }}</td>
                        <td>{{ $carona->data }}</td>
                        <td>{{ $carona->velocidade_media }}</td>
                        <td>{{ $carona->id_destino }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
