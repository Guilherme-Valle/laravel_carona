@extends('welcome')

@section('title', 'Destinos')

@section('content')
            <thead>
                <th>Id</th>
                <th>Endereco</th>
                <th>Cep</th>
                <th>Numero</th>
                <th>Id_cidade</th>
            </thead>
            <tbody>
                @foreach($destinos as $destino)
                    <tr>
                        <td>{{ $destino->id }} </td>
                        <td>{{ $destino->endereco }}</td>
                        <td>{{ $destino->cep }} </td>
                        <td>{{ $destino->numero }}</td>
                        <td>{{ $destino->id_cidade }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
