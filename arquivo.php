<?php
$arquivo = "<link rel='stylesheet' href='bootstrap.min.css'>";
require_once 'conectar.php';
$cor="#cccccc";
$consulta = $pdo->query("SELECT idaluno, matricula, nome, curso FROM aluno;");
$arquivo .= ("<table border=1 class=table>
     <tr bgcolor=#87CEEB>
        <td class=text-center><b>ID</b></td>
        <td><center><b>Matricula</b></center></td>
        <td><center><b>Nome</b></center></td>
        <td><center><b>Curso</b></center></td>
     </tr>
  ");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
  if ($cor == "#cccccc"){$cor = "#ffffff";}else{$cor = "#cccccc";}
    $arquivo .= "
            <tr bgcolor=$cor>
              <td class=text-center>{$linha['idaluno']}</td>
              <td class=text-center>{$linha['matricula']}</td>
              <td>{$linha['nome']}</td>
              <td class=text-center>{$linha['curso']}</td>
            ";
}
echo "</table>";
$ponteiro = fopen("relatorio.xls", "w");
fwrite($ponteiro, $arquivo);
fclose($ponteiro);

//echo("RELATÓRIO GERADO COM SUCESSO: <a href='http://localhost/estacio/relatorio.xls'>SALVAR</a>");
//echo("<center><br><br><a href='http://localhost/estacio/busca.php'><img src='imgs/voltar.png'></a></center>");

//echo("</table><br><img src=imges/max.png width='40' height='40' onclick=print();><a href=grafico.php><img src=imges/grafico.png width='40' height='40'></a> ");

?>