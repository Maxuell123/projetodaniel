<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
	<title>Cadastro de Alunos</title>
	
</head>

<body>

	  <div class="container">
	 <form action="gravar.php" method="post">
	 
	 <fieldset class="borda" name="aluno" style="max-width:500px;">
	 <h1>Bem vindos</h1>
	       <h1 class="dados">Dados do aluno</h1>
			<div class="matricula">
			<p><label for="matricula">Matrícula:</label>
				<input type="text" name="matricula" maxlength="12"></p>
				</div>
				
			<p><label class="nome" for="nome">Nome:</label>
			<input class="po" type="text" name="nome" maxlength="50"></p>
			
			<p><label class="tel" for="nome">Telefone:</label>
				<input class="po1" type="text" name="telefone" maxlength="14"></p>
			
			<p><label class="email" for="email">E-mail:</label>
				<input class="po2" type="text" name="email" maxlength="40"></p>
			<br>
			<div class="ads">
			<label for="curso">Curso:</label>
			<select name="curso">
				<option disabled selected></option>
				<option>ADS</option>
				<option>Design</option>
			</select>
			<br>
			<label for="turno">Turno:</label>
			<select name="turno">
			<option disabled selected></option>
				<option>not</option>
				<option>mat</option>
			</select>
			<br>
			<div class="periodo">
			<label for="periodo">Período</label>
			<select name="periodo">
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
			</div>
			</div>
			<input type="hidden" name="status" value="ativo">
			
			<input class="controle" type="submit" name="btEnviar" value="Salvar Dados...">
			<button class="controle2"><a href="busca.php">Buscar dados...</a></button>
		</fieldset>
	</form>
	</div>
	<div class="col">
		   <img src="imges/aluno.png">
	    </div>	
</body>

</html>