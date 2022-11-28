<?php   

//$cpf = $_POST["cpf"];
//$senha = $_POST["senha"]; 

$cpf   = $_REQUEST["usuario"];
$senha = $_REQUEST["senha"];

echo "<meta charset='UTF-8'>";
echo "<h1>";
echo "<br>Digitou a senha: $senha<br>";
echo "<br>Criptografada: " . md5($senha);
echo "<hr>";

$senha = $senha . "ÇzY4%#@";
$senha1 = md5 ($senha);

echo "<hr>";
$senha = password_hash($senha, PASSWORD_BCRYPT);
echo "<br>$senha";

echo "<h1>Hello World.</h1>";
echo "Cpf: $cpf <br>";
echo "Senha: $senha";
echo "<br>Senha Criptografada: $senha1<br>";
echo "<br><br>Qtde de caracteres: ". strlen($senha1);

?>