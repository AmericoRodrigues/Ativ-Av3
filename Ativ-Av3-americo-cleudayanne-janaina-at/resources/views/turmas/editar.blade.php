@extends('template')

@section('conteudo')
<form method="POST" action="/altera-turma/{{$turma->id }}">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
      <label>Curso</label>
      <input type="text" class="form-control" name="curso">
    </div>

    <div class="form-group">
      <label>Sala</label>
      <input type="text" class="form-control" name="sala">
    </div>

    <div class="form-group">
      <label>Data Nascimento</label>
      <input type="date" class="form-control" name="data">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
  </form>
@stop