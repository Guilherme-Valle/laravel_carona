@extends('welcome')

@section('title', 'Carros')

@section('content')
<div style="text-align: center; margin-bottom: 20px;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo"><span class="glyphicon glyphicon-plus"></span></button>
</div>

<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="/carros/save" method="post" onsubmit="">
      @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Criação de novo carro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="modelo_select">Modelo do carro</label>
                  <select class="form-control" name="modelo_select">
                    @foreach($models as $model)
                      <option value="{{$model->id}}">{{$model->nome}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="placa" style="text-align: left">Placa</label>
                <input type="text" class="form-control" name="placa">
              </div>
              <div class="form-group">
                <label for="dono_select">Proprietário</label>
                  <select class="form-control" name="dono_select">
                    @foreach($persons as $person)
                      <option value="{{$person->id}}">{{$person->nome}}</option>
                    @endforeach
                  </select>
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
                <th>Modelo_Id</th>
                <th>Placa</th>
                <th>Id_Proprietario</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($carros as $carro)
                    <tr>
                        <td>{{ $carro->id }} </td>
                        <td>{{ $carro->modelo_id }}</td>
                        <td>{{ $carro->placa }} </td>
                        <td>{{ $carro->id_proprietario }}</td>
                        <td> <button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
