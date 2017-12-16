<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Turmas </title>
  <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style type="text/css">
	#body{
	background: -webkit-gradient(linear, left top, right top, from(#FFFFFF), to(#C2C2C2));/* webkit browsers */ 
	
	}
	.container{
		position: relative;
		background:;
		color:#191970;

	}
	.baixo{
		margin-bottom: 20px;
	}
</style>
</head>

<body id="body">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar bg-default">
			
  
		  <a href="index-turmas" style="color:white;"><button type="button" class="btn btn-success btn-lg" ><span class="glyphicon glyphicon-home"></span> HOME </button></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
			  <div class="list-group collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="list-group-item" href="index-turmas">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="list-group-item nav-link" href="cria-turma">Cadastra Turma</a>
			      </li>
			      <li class="nav-item">
			        <a class="list-group-item nav-link" href="editar-turma">Editar</a>
			      </li>
			      <li class="nav-item">
			        <a class="list-group-item nav-link " href="lista-turmas">Lista</a>
			      </li>
			    </ul>
			  </div>
	</nav>
  <div class="container ">
    <div class="row">
      @yield('conteudo')
    </div>
  </div>
</div>
</body>
</html>