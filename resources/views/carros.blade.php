@extends('welcome')

@section('title', 'Carros')

@section('content')
            <thead>
                <th>Id</th>
                <th>Modelo_Id</th>
                <th>Placa</th>
                <th>Id_Proprietario</th>
            </thead>
            <tbody>
                @foreach($carros as $carro)
                    <tr>
                        <td>{{ $carro->id }} </td>
                        <td>{{ $carro->modelo_id }}</td>
                        <td>{{ $carro->placa }} </td>
                        <td>{{ $carro->id_proprietario }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
