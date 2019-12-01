@extends('welcome')

@section('title', 'Cidades')

@section('content')
<div style="text-align: center; margin-bottom: 20px;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo"><span class="glyphicon glyphicon-plus"></span></button>
</div>

<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="/cidades/save" method="post" onsubmit="">
      @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Criação de nova cidade</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="estado_select">Estado</label>
                  <select class="form-control" name="estado_select">
                    @foreach($estados as $estado)
                      <option value="{{$estado->id}}">{{$estado->nome}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome">
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
                <th>Nome</th>
                <th>Id_estado</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($cidades as $cidade)
                    <tr>
                        <td>{{ $cidade->id }} </td>
                        <td>{{ $cidade->nome }}</td>
                        <td>{{ $cidade->id_estado }} </td>
                        <td> <button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
