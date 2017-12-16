<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Http\Requests\TurmaRequest;


class TurmaController extends Controller
{
   
   public function listaTurma(Request $requisicao)
  {
    $turmas = Turma::select('*');

    if($requisicao->has('pesquisa')) {
      $turmas->where('name', 'like', '%' . $requisicao->get('pesquisa') . '%');
    }

    $turmas->orderBy('name', 'asc');

    $listaDeTurmas = $turmas->get();

    return view('turmas.lista', [
      'turmas' => $listaDeTurmas
    ]);
  }

  public function salvarTurma(TurmaRequest $requisicao)
  {
    

    Turma::create([
      'name' => $requisicao->get('name'), //nome do imput
      'curso' => $requisicao->get('curso'),
      'sala' => $requisicao->get('sala'),
      'data' => $requisicao->get('data')
    ]);

      

    return redirect('lista-turmas');
  }

   public function homeTurma()
  {
    return view('turmas.index');
  }


  public function formularioTurma()
  {
  	return view('turmas.criar');
  }


  public function editarTurma($id)
  {
    $turmas = Turma::find($id);

    return view('turmas.editar', [
      'turma' => $turmas
    ]);
  }

  public function alteraTurma($id, Request $requisicao)
  {
    $turma = Turma::find($id);

    $turma->update([
      'name' => $requisicao->get('name'),
      'curso' => $requisicao->get('curso'),
      'sala' => $requisicao->get('sala'),
      'data' => $requisicao->get('data')
    ]);

    return redirect('lista-turmas');
  }

	public function deletarTurma($id)
	  {
      Turma::destroy($id);
	return redirect('lista-turmas');
	  }
	
}
