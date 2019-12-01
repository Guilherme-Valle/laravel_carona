@extends('welcome')

@section('title', 'Destinos')

@section('content')
<div style="text-align: center; margin-bottom: 20px;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo"><span class="glyphicon glyphicon-plus"></span></button>
</div>

<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="/destinos/save" method="post" onsubmit="">
      @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Criação de novo destino</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="citySelect">Cidade do destino</label>
                  <select class="form-control" name="citySelect">
                    @foreach($data as $city)
                      <option value="{{$city->id}}">{{$city->nome}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="address" style="text-align: left">Endereço</label>
                <input type="text" class="form-control" name="address">
              </div>
              <div class="form-group">
                <label for="cep" style="text-align: left">CEP</label>
                <input type="text" class="form-control" name="cep">
              </div>
              <div class="form-group">
                <label for="number" style="text-align: left">Número</label>
                <input type="text" class="form-control" name="number">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
<table class="table table-bordered">

            <thead>
                <th>Id</th>
                <th>Endereco</th>
                <th>Cep</th>
                <th>Numero</th>
                <th>Id_cidade</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($destinos as $destino)
                    <tr>
                        <td>{{ $destino->id }} </td>
                        <td>{{ $destino->endereco }}</td>
                        <td>{{ $destino->cep }} </td>
                        <td>{{ $destino->numero }}</td>
                        <td>{{ $destino->id_cidade }}</td>
                        <td> <button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
