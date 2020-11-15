<?php
session_start();
if(isset($_SESSION['logado'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="estilo.css">
	<title>Cadastro de Alunos</title>
</head>
<body>
	
<!--header-->	
<div id="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
        <a class="navbar-brand" href="#">
          <img src="imges/livro.png" width="60" height="60" class="img-fluid" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Dados</a>
          
            </li>
            <li class="nav-item">
              <a class="nav-link" href="busca.php">Tabela</a>
			</li>
            <li class="nav-item">
              <a class="nav-link" href="grafico.php">Grafico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="arquivo.php">Excel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://portal.estacio.br">Estácio</a>
            </li>
          </ul>
        </div>
    </div>
    </nav>
  </div>
  </div>
  <!--header--> 

<!--Registro-->
<div class="container">
    
	<fieldset name="aluno" style="max-width:1000px;" class="border p-2">
	<a href="index.php">Logout</a> 
	<form class="form-signin" action="gravar.php" method="post">
	
		<legend><h1>Dados do aluno</h1></legend>
		<!--Matricula-->
		<p><label for="matricula"><b>Matrícula</b></label>
		<input type="text" class="form-control" placeholder="Sua matricula" name="matricula" maxlength="12"></p>
        <!--Nome-->
		<p><label for="nome"><b>Nome</b></label>
		<input type="text" class="form-control" placeholder="Nome" name="nome" maxlength="50"> &nbsp;&nbsp; <a href="busca.php"><img src="imges/lupa1.png" width="40" height="40" align="center"></a></p>
        <!--Telefone-->
		<p><label for="telefone"><b>Telefone</b></label>
		<input type="text" class="form-control" placeholder="telefone" name="telefone" maxlength="14"></p>
        <!--E-mail-->
		<p><label for="email"><b>E-mail</b></label>
		<input type="text" class="form-control" placeholder="Email" name="email" maxlength="40"></p>
                    <!--Curso-->
		            <label for="curso"><b>Curso</b></label>
					<select name="curso" class="form-control">
					<option>ADS</option>
					<option>Design</option>
					<option>Fisioterapia</option>
					<option>Direito</option>
					<option>Enfermagem</option>
					</select>
					<br>
					<!--Turno-->
					<label for="turno"><b>Turno:</b></label>
					<select name="turno" class="form-control">
						<option disabled selected></option>
						<option>not</option>
						<option>mat</option>
					</select>
					<br>
					<!--Periodo-->
						<label for="periodo"><b>Período</b></label>
						<select name="periodo" class="form-control">
							<option disabled selected></option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
						<br>
					<!--Button-->
				<input type="hidden" name="status" value="ativo">
				<input class="btn btn-warning" type="submit" name="btEnviar" value="Salvar Dados...">
				<a  class="btn btn-danger" href="busca.php">Buscar dados...</a>
				<a class="button btn-success" class="clique" href="index.php">Deslogar</a>
	</fieldset>
	</form>
	</div>
	<!--Registro-->
 </body>
 </html>
 <?php
 }else{
	echo "<script>alert('É preciso logar para acessar a página.');window.location.assign('index.php');</script>";
}
?>