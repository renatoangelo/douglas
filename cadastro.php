<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

echo "<h1>Aqui estão os dados do formulário</h1>";

echo "<h3>$nome</h3>";
echo "<h3>$email</h3>";

$x = 1;

while ($x <=5) {
  echo "<hr>";
  echo $nome;
  echo "<br>$email";
  echo "<BR><BR>Vez: ". $x . "<BR><BR>";
  $x++;
}
?>

<h4> Aqui agora entra uma programação para conectar e Teste Hugo e armazenar os dados no banco de dados</h4>