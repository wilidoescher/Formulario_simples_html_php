<?php
$idaluno = $_GET["idaluno"];
try {
  $pdo = new PDO('mysql:host=localhost;dbname=estaciodb', 'root', '123456');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('DELETE FROM alunos WHERE idaluno = :idaluno');
  $stmt->bindParam(':idaluno', $idaluno); 
  $stmt->execute();
     
  echo ("<center><font size='17'>Deletado ".$stmt->rowCount()." </font></center>");  
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
echo("<center><br><br><a href='http://localhost/app/'><input type='button' value='Home'></a></center>");
?>