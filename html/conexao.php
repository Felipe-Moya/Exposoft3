<!-- conexao externa com o banco de dados -->
<?php
$local = "localhost";
$user = "root";
$senha = "";
$dtbase = "skate";

$mysql= new mysqli($local,$user,$senha,$dtbase);

if ($mysql->connect_error) {
  die("Erro ao conectar ao banco de dados: " . $mysql->connect_error);
}

?>
