@extends('template')


@section('conteudo')
<div class="baixo">
  <div class="panel">
    <div class="panel-heading">
      aqui vai mostra todos as Turmas disponiveis..
    </div>
    <div class="panel-body">
      <form>
        <div class="form-group">
          <input type="text" class="form-control" name="pesquisa"/>
        </div>
        <button type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Curso</th>
        <th>Sala</th>
        <th>data</th>
        <th>Funções</th>
      </tr>
    </thead>

    <tbody>
      @foreach($turmas as $turma)
        <tr>
            <td> {{ $turma->id }} </td>
            <td> {{ $turma->name }} </td>
            <td> {{ $turma->curso }} </td>
            <td> {{ $turma->sala }} </td>
            <td> {{ $turma->data }} </td>
            
            <td>
              <a class="btn btn-secondary" href="/editar-turma/{{ $turma->id }}">
                <i class="fa fa-edit"></i> Editar
              </a>

              <form style="display: inline;" method="POST" action="deletar-turma/{{ $turma->id }}">
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}
              <button type="submit" class="btn btn-danger" href="/editar-turma/{{ $turma->id }}">
                <i class="fa fa-trash"></i> Deletar
              </button>
              </form>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/cria-turma" class="btn btn-success">
    <i class="fa fa-plus-circle"></i>
    Adicionar Turma
  </a>
  </div>
@stop
    