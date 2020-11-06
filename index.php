<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="estilo.css">
	<title>Cadastro de Alunos</title>
</head>
<body>
	
	<div class="container">
	<fieldset name="aluno" style="max-width:1000px;" class="border p-2">
	<form class="form-signin" action="gravar.php" method="post">
	
		<legend><h1>Dados do aluno</h1></legend>
		<!--Matricula-->
		<p><label for="matricula">Matrícula</label>
		<input type="text" class="form-control" name="matricula" maxlength="12"></p>
        <!--Nome-->
		<p><label for="nome">Nome</label>
		<input type="text" class="form-control" name="nome" maxlength="50"> &nbsp;&nbsp; <a href="busca.php"><img src="imges/lupa.png" width="20" height="20" align="center"></a></p>
        <!--Telefone-->
		<p><label for="telefone">Telefone</label>
		<input type="text" class="form-control" name="telefone" maxlength="14"></p>
        <!--E-mail-->
		<p><label for="email">E-mail</label>
		<input type="text" class="form-control" name="email" maxlength="40"></p>
                    <!--Curso-->
		            <label for="curso">Curso</label>
					<select name="curso" class="form-control">
					<option>ADS</option>
					<option>Design</option>
					<option>Fisioterapia</option>
					<option>Direito</option>
					<option>Enfermagem</option>
					</select>
					<br>
					<!--Turno-->
					<label for="turno">Turno:</label>
					<select name="turno" class="form-control">
						<option disabled selected></option>
						<option>not</option>
						<option>mat</option>
					</select>
					<br>
					<!--Periodo-->
						<label for="periodo">Período</label>
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
	</fieldset>
	</form>
	</div>
 </body>
 </html>