@extends('welcome')

@section('title', 'Estados')

@section('content')
            <thead>
                <th>Id</th>
                <th>Nome</th>
            </thead>
            <tbody>
                @foreach($estados as $estado)
                    <tr>
                        <td>{{ $estado->id }} </td>
                        <td>{{ $estado->nome }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
