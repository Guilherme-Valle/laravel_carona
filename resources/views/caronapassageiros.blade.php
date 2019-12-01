@extends('welcome')

@section('title', 'Caronapassageiro')

@section('content')
<div style="text-align: center; margin-bottom: 20px;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo"><span class="glyphicon glyphicon-plus"></span></button>
</div>

<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="/caronapas/save" method="post" onsubmit="">
      @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Criação de novo carona_passageiro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="carona_select">Carona</label>
                  <select class="form-control" name="carona_select">
                    @foreach($caronas as $carona)
                      <option value="{{$carona->id}}">Código {{$carona->id}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="passageiro_select">Passageiro</label>
                  <select class="form-control" name="passageiro_select">
                    @foreach($passageiros as $person)
                      <option value="{{$person->id}}">{{$person->nome}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="avaliacao_passageiro">Avaliacao_passageiro</label>
                <input type="number" class="form-control" name="avaliacao_passageiro">
              </div>
              <div class="form-group">
                <label for="avaliacao_motorista">Avaliacao_motorista</label>
                <input type="number" class="form-control" name="avaliacao_motorista">
              </div>
              <div class="form-group">
                <label for="comentario_passageiro">Comentario_passageiro</label>
                <input type="text" class="form-control" name="comentario_passageiro">
              </div>
              <div class="form-group">
                <label for="comentario_motorista">Comentario_motorista</label>
                <input type="text" class="form-control" name="comentario_motorista">
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
                <th>Id_Carona</th>
                <th>Id_Passageiro</th>
                <th>Avaliacao_passageiro</th>
                <th>avaliacao_motorista</th>
                <th>Comentario_passageiro</th>
                <th>comentario_motorista</th>
                <th>Ações</th>
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
                        <td> <button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
