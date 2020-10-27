<?php
$pdo = new PDO('mysql:host=localhost;dbname=projetodaniel', 'root', Null);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$cor="#cccccc";

$consulta = $pdo->query("SELECT idaluno, matricula, nome, curso FROM aluno;");
echo("<table border=1>
     <tr bgcolor=#87CEEB>
        <td><center><b>ID</b></center></td>
        <td><center><b>Matricula</b></center></td>
        <td><center><b>Nome</b></center></td>
        <td><center><b>Curso</b></center></td>
     </tr>
	");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
	if ($cor == "#cccccc"){$cor = "#ffffff";}else{$cor = "#cccccc";}
    echo "
            <tr bgcolor=$cor>
              <td>{$linha['idaluno']}</td>
              <td>{$linha['matricula']}</td>
              <td>{$linha['nome']}</td>
              <td>{$linha['curso']}</td>
            </tr>
            ";
}
echo("</table><br><img src=../imges/max.png width='40' height='40' onclick=print();>");
