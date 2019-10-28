@extends('welcome')

@section('title', 'Cidades')

@section('content')
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Id_estado</th>
            </thead>
            <tbody>
                @foreach($cidades as $cidade)
                    <tr>
                        <td>{{ $cidade->id }} </td>
                        <td>{{ $cidade->nome }}</td>
                        <td>{{ $cidade->id_estado }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
