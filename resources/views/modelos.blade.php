@extends('welcome')

@section('title', 'Modelos')

@section('content')

            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Ano</th>
                <th>Marca</th>
            </thead>
            <tbody>
                @foreach($modelos as $carro)
                    <tr>
                        <td>{{ $carro->id }} </td>
                        <td>{{ $carro->nome }}</td>
                        <td>{{ $carro->ano }} </td>
                        <td>{{ $carro->marca }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
