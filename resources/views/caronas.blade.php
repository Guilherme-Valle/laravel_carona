@extends('welcome')

@section('title', 'Caronas')

@section('content')
<div style="text-align: center; margin-bottom: 20px;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo"><span class="glyphicon glyphicon-plus"></span></button>
</div>

<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="/caronas/save" method="post" onsubmit="">
      @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Criação de nova carona</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="carro_select">Carro</label>
                  <select class="form-control" name="carro_select">
                    @foreach($carros as $carro)
                      <option value="{{$carro->id}}">Código {{$carro->id}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="destino_select">Destino</label>
                  <select class="form-control" name="destino_select">
                    @foreach($destinos as $destino)
                      <option value="{{$destino->id}}">{{$destino->endereco}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="horario_inicio">Horario_inicio</label>
                <input type="text" class="form-control" name="horario_inicio">
              </div>
              <div class="form-group">
                <label for="horario_final">Horario_final</label>
                <input type="text" class="form-control" name="horario_final">
              </div>
              <div class="form-group">
                <label for="data">Data</label>
                <input type="text" class="form-control" name="data">
              </div>
              <div class="form-group">
                <label for="velocidade_media">Velocidade_media</label>
                <input type="text" class="form-control" name="velocidade_media">
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
                <th>Id_carro</th>
                <th>Horario_inicio</th>
                <th>Horario_final</th>
                <th>Data</th>
                <th>Velocidade media</th>
                <th>Id destino</th>
                <th>Ações</th>
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
                        <td> <button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
