<?php
require_once 'conectar.php';
$id = $_REQUEST["idaluno"];
//echo "id";
$consulta = $pdo->query("SELECT * FROM aluno WHERE idaluno =$id;");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

echo "
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<link rel='stylesheet' href='bootstrap.min.css'>
	<link rel='stylesheet' href='estilo.css'>
	<title>Cadastro de Alunos</title>
</head>
<body>

<!--header-->

<div id='header'>
<div class='container'>
  <nav class='navbar navbar-expand-lg navbar-light justify-content-between'>
	<a class='navbar-brand' href='#'>
	  <img src='imges/livro.png' width='60' height='60' class='img-fluid' />
	</a>
	<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav'
	  aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
	  <span class='navbar-toggler-icon'></span>
	</button>
	<div class='collapse navbar-collapse' id='navbarNav'>
	  <ul class='navbar-nav'>
		<li class='nav-item'>
		  <a class='nav-link active' aria-current='page' href='index.php'>Dados</a>
	  
		</li>
		<li class='nav-item'>
		  <a class='nav-link' href='busca.php'>Tabela</a>
		</li>
		<li class='nav-item'>
		  <a class='nav-link' href='grafico.php'>Grafico</a>
		</li>
		<li class='nav-item'>
		  <a class='nav-link' href='arquivo.php'>Excel</a>
		</li>
		<li class='nav-item'>
		  <a class='nav-link' href='https://portal.estacio.br'>Estácio</a>
		</li>
	  </ul>
	</div>
</div>
</nav>
</div>
</div>

<!--header-->

<!--registro-->
	<div class='container'>
	<fieldset name='aluno' style='max-width:1000px;' class='border p-2'>
	<form class='form-signin' action='gravar.php' method='post'>
         
		<legend><h1>Dados do aluno</h1></legend>
		
		<p><label for='matricula'>Matrícula</label>
		<input type='text' class='form-control' name='matricula' value='".$linha['matricula']."' maxlength='12'></p>
       
		<p><label for='nome'>Nome</label>
		<input type='text' class='form-control' name='nome' value='".$linha['nome']."' maxlength='50'> &nbsp;&nbsp; <a href='busca.php'><img src='imges/lupa1.png' width='40' height='40' align='center'></a></p>

		<p><label for='telefone'>Telefone</label>
		<input type='text' class='form-control' name='telefone' value='".$linha['telefone']."' maxlength='14'></p>

		<p><label for='email'>E-mail</label>
		<input type='text' class='form-control' name='email' value='".$linha['email']."' maxlength='40'></p>

		            <label for='curso'>Curso</label>
					<select name='curso' class='form-control'>
					<option selected>".$linha['curso']."</option>
					<option>ADS</option>
					<option>Design</option>
					<option>Fisioterapia</option>
					<option>Direito</option>
					<option>Enfermagem</option>
					</select>
					<br>

					<label for='turno'>Turno:</label>
					<select name='turno' class='form-control'>
					    <option selected>".$linha['turno']."</option>
						<option>not</option>
						<option>mat</option>
					</select>
					<br>
					
						<label for='periodo'>Período</label>
						<select name='periodo' class='form-control'>
						<option selected></option>
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
				<input type='hidden' name='status' value='ativo'>
				<input type='hidden' name='idaluno' value='".$linha['idaluno']."'>
				<a  class='btn btn-danger' href='busca.php'>Buscar dados...</a>
	  </fieldset>
	 </form>
	 </div>
	 
	 <!--registro-->
 </body>
 </html>
";
}
?>



