<?php
$nome     = $_POST["nome"];
$mail     = $_POST["mail"];
$ddd      = $_POST["ddd"];
$fone     = $_POST["fone"];
$endereco = $_POST["endereco"];
$cidade   = $_POST["cidade"];
$uf       = $_POST["uf"];
$funcao   = $_POST["funcao"];

//echo("$nome, $mail, $ddd, $fone, $endereco, $cidade, $uf, $funcao");

if($funcao == 'gravar'){
try {
  $pdo = new PDO('mysql:host=localhost;dbname=estaciodb', 'root', '123456');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('INSERT INTO alunos VALUES(:idaluno,:nome,:mail,:ddd,:fone,:endereco,:cidade,:uf)');
  $stmt->execute(array(
  ':idaluno' => null,
	':nome'    => $nome,
	':mail'    => $mail,
	':ddd'     => $ddd,
	':fone'    => $fone,
	':endereco'=> $endereco,
	':cidade'  => $cidade,
	':uf'      => $uf
  ));
   
  echo ("<script>alert('Dados registrados com sucesso.');window.history.back();</script>"); 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
}
if($funcao == 'editar'){
$idaluno = $_POST["idaluno"];
try {
  $pdo = new PDO('mysql:host=localhost;dbname=estaciodb', 'root', '123456');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('UPDATE alunos SET nome = :nome, mail = :mail, ddd = :ddd, fone = :fone, endereco = :endereco, cidade = :cidade, uf = :uf WHERE idaluno = :idaluno');
  $stmt->execute(array(
  ':idaluno' => $idaluno,
  ':nome'    => $nome,
	':mail'    => $mail,
	':ddd'     => $ddd,
	':fone'    => $fone,
	':endereco'=> $endereco,
	':cidade'  => $cidade,
	':uf'      => $uf
  ));
     
  echo ("<script>alert('Dados atualizados com sucesso.');window.location.href='index.html';</script>"); 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

}
?>