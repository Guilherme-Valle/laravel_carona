@extends('welcome')

@section('title', 'Modelos')

@section('content')
<div style="text-align: center; margin-bottom: 20px;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo"><span class="glyphicon glyphicon-plus"></span></button>
</div>

<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="/modelos/save" method="post" onsubmit="">
      @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Criação de novo modelo de carro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </div>
        </button>
          <div class="modal-body">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome">
              </div>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <label for="ano">Ano</label>
                  <input type="number" class="form-control" name="ano">
                </div>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" name="marca">
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
                <th>Ano</th>
                <th>Marca</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($modelos as $carro)
                    <tr>
                        <td>{{ $carro->id }} </td>
                        <td>{{ $carro->nome }}</td>
                        <td>{{ $carro->ano }} </td>
                        <td>{{ $carro->marca }}</td>
                        <td> <button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
