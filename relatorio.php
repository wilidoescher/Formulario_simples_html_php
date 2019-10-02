<?php
$arquivo=("<meta charset='UTF-8'><center>");
$arquivo.=("
<table border='1' bgcolor='#A020F0'>
<tr>
<td width='40'><center>ID</center></td>
<td width='200'><center>NOME</center></td>
<td width='200'><center>E-MAIL</center></td>
<td width='100'><center>FONE</center></td>
<td width='250'><center>ENDEREÇO</center></td>
<td width='70'><center>CIDADE</center></td>
<td width='40'><center>U.F</center></td>
</tr>
</table>
");
$pdo = new PDO('mysql:host=localhost;dbname=cadastro_db', 'root', null);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
$consulta = $pdo->query("SELECT * FROM alunos");
$arquivo.=("<table border='1'>"); 
$cor='#CDC5BF';  
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    if($cor == '#CDC5BF'){$cor='#EEE5DE';}else{$cor='#CDC5BF';}
	$arquivo.= "
<tr bgcolor=$cor>
<td width='40'>{$linha['idaluno']}</td>
<td width='200'>{$linha['nome']}</td>
<td width='200'>{$linha['mail']}</td>
<td width='100'>({$linha['ddd']}){$linha['fone']}</td>
<td width='250'>{$linha['endereco']}</td>
<td width='70'>{$linha['cidade']}</td>
<td width='40'>{$linha['uf']}</td>
</tr>
	";
}
$arquivo.=("</table>");
$arquivo.=("</center>");

$ponteiro = fopen("relatorio.xls", "w");
fwrite($ponteiro, $arquivo);
fclose($ponteiro);
echo("RELATÓRIO GERADO COM SUCESSO: <a href='http://localhost/cadastro_db/relatorio.xls'>SALVAR</a>");
echo("<center><br><br><a href='http://localhost/cadastro_db/busca.php'><img src='imgs/voltar.png'></a></center>")

?>