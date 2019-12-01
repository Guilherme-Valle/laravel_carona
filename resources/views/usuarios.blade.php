@extends('welcome')

@section('title', 'Usuarios')

@section('content')
<div style="text-align: center; margin-bottom: 20px;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo"><span class="glyphicon glyphicon-plus"></span></button>
</div>

<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="/usuarios/save" method="post" onsubmit="">
      @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Criação de novo usuario</h5>
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
                  <label for="cpf">CPF</label>
                  <input type="number" class="form-control" name="cpf">
                </div>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <label for="data_de_nascimento">Data de nascimento</label>
                    <input type="text" class="form-control" name="data_de_nascimento">
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
                <th>Cpf</th>
                <th>Nome</th>
                <th>Data_de_nascimento</th>
                <th>Avaliacao_motorista</th>
                <th>Avaliacao_passageiro</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                  
                        <td>{{ $usuario->id }} </td>
                        <td>{{ $usuario->cpf }}</td>
                        <td>{{ $usuario->nome }}</td>
                        <td>{{ $usuario->data_de_nascimento }}</td>
                        <td>{{ $usuario->avaliacao_motorista }}</td>
                        <td>{{ $usuario->avaliacao_passageiro }}</td>
                        <td> <button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
