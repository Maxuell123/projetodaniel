<?php
 session_start();
if(isset($_SESSION['logado'])){

  echo "<link rel='stylesheet' href='bootstrap.min.css'>";
  require_once 'conectar.php';
$cor="#1a1a18";
$consulta = $pdo->query("SELECT idaluno, matricula, nome, curso FROM aluno;");
echo("<table border=1 class=table>
<tr bgcolor=#2f4c5e>
    <td class=text-center><font color=#fcfcf7><b>ID</b></font></td>
    <td><center><font color=#fcfcf7><b>Matricula</b></center></font></td>
    <td><center><font color=#fcfcf7><b>Nome</b></center></font></td>
    <td><center><font color=#fcfcf7><b>Curso</b></center></font></td>
    <td></td>
    <td></td>
</tr>
  ");
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    if ($cor == "#3b3e40"){$cor = "#4e5559";}else{$cor = "#3b3e40";}
      echo "
      <tr bgcolor=$cor>
      <td class=text-center><font color=#fcfcf7>{$linha['idaluno']}</font></td>
      <td class=text-center><font color=#fcfcf7>{$linha['matricula']}</font></td>
      <td class=text-center><font color=#fcfcf7>{$linha['nome']}</font></td>
      <td class=text-center><font color=#fcfcf7>{$linha['curso']}</font></td>
      <td><a href=deletar.php?idaluno={$linha['idaluno']} onclick=\" return confirm('Deseja realmente apagar o registro?'); return false; \"><img src=imges/del.png width=30 height=30 title='Deletar registro'></a></td>
      <td><a href=editar.php?idaluno={$linha['idaluno']}><img src=imges/edit.png width=30 height=30 title='Editar registro'></a></td>
    </tr>
    ";                 
}
echo("</table><br><center><img src=imges/max2.png width='90' height='90' onclick=print();> <a href=grafico.php><img src=imges/grafico.png width='90' height='90'><a href=arquivo.php><img src=imges/excel.png width='90' height='90'></center></a><a href=inicial.php><button type=button class='btn btn-primary'>Voltar</button></a>");
}else{
  echo "<script>alert('É preciso logar para acessar a página.');window.location.assign('index.php');</script>";
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='bootstrap.min.css'>
  <link rel="stylesheet" href="busca.css">
  <title>Busca</title>
</head>
<body>

<div class="navbar">
<h1>TABELA DE ALUNOS</h1> 
</div>
<p>CADASTRADOS</p>

</body>
</html>
