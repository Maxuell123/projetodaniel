<?php
echo "<link rel='stylesheet' href='bootstrap.min.css'>";
require_once 'conectar.php';
$cor="#cccccc";
$consulta = $pdo->query("SELECT idaluno, matricula, nome, curso FROM aluno;");
echo("<table border=1 class=table>
     <tr bgcolor=#87CEEB>
        <td class=text-center><b>ID</b></td>
        <td><center><b>Matricula</b></center></td>
        <td><center><b>Nome</b></center></td>
        <td><center><b>Curso</b></center></td>
        <td></td>
        <td></td>
     </tr>
  ");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
  if ($cor == "#cccccc"){$cor = "#ffffff";}else{$cor = "#cccccc";}
    echo "
            <tr bgcolor=$cor>
              <td class=text-center>{$linha['idaluno']}</td>
              <td class=text-center>{$linha['matricula']}</td>
              <td>{$linha['nome']}</td>
              <td class=text-center>{$linha['curso']}</td>
              <td><a href=deletar.php?idaluno={$linha['idaluno']} onclick=\" return confirm('Deseja realmente apagar o registro?'); return false; \"><img src=imges/del.png width=30 height=30 title='Deletar registro'></a></td>
              <td><a href=editar.php?idaluno={$linha['idaluno']}><img src=imges/edit.png width=30 height=30 title='Editar registro'></a></td>
            </tr>
            ";
}
echo("</table><br><center><img src=imges/max.png width='80' height='80' onclick=print();> <a href=grafico.php><img src=imges/grafico.png width='80' height='80'></center></a> ");

?>