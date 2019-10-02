<?php
$idaluno = $_GET["idaluno"];
$pdo = new PDO('mysql:host=localhost;dbname=estaciodb', 'root', '123456');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
$consulta = $pdo->query("SELECT * FROM alunos WHERE idaluno = '$idaluno'");
  
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
echo("
<html>
<head>
<meta charset='UTF-8'>
<title>Cadatro de Alunos</title>
</head>
<body>
<table border='1' width='600'>
<tr>
<td><center><h2>Editar: </h2></center></td>
</tr>
</table>
<form action='adm.php' method='post'>
<table width='600'>
<tr>
<td width='100'>Nome:</td>
<td><input type='text' name='nome' size='50' maxlength='50' value='".$linha['nome']."'>&nbsp;
</td>
</tr>
<tr>
<td width='100'>E-mail:</td>
<td><input type='text' name='mail' size='50' maxlength='30' value='".$linha['mail']."'></td>
</tr>
<tr>
<td width='100'>Fone:</td>
<td><input type='text' name='ddd' size='1' maxlength='2' value='".$linha['ddd']."'>-<input type='text' name='fone' maxlength='9'  value=".$linha['fone']."></td>
</tr>
<tr>
<td width='100'>Endereço:</td>
<td><input type='text' name='endereco' size='50' maxlength='50' value='".$linha['endereco']."'></td>
</tr>
<tr>
<td width='100'>Cidade:</td>
<td><input type='text' name='cidade' size='50' maxlength='30' value='".$linha['cidade']."'></td>
<td>U.F:</td>
<td>
<select name='uf'>
  <option value='".$linha['uf']."' selected>".$linha['uf']."</option>
  <option>GO</option>
  <option>TO</option>
  <option>SP</option>
  <option>RJ</option>
  <option>DF</option>
</select>
<input type='hidden' name='idaluno' value='".$linha['idaluno']."'>
<input type='hidden' name='funcao' value='editar'>
</td>
</tr>
</table>
<br>
<table cellspacing='0'>
<td width='300'><center><a href='index.html'><input type='Button' name='btCadastro' value='Cadastro'></a></center></td>
<td width='300'><center><input type='Submit' name='btAtualizar' value='Atualizar'></center></td>
</tr>
</table>
</form>
</body>
</html>
");
}
