<html>
<head>
<title>PHP aula 5</title>
</head>
<body>
<?php
function soma($v1, $v2, $v3) {
$soma = $v1+$v2+$v3;
return $soma;
}
function mul($v1, $v2, $v3) {
$mul = $v1*$v2*$v3;
return $mul;
}





$a = 10;
$b = 15;
$c = 5;

$resm = mul($a, $b, $c);
$ress = soma($a, $b, $c);

echo"<br/>soma e ".$ress;
echo"<br/>multiplicacao e ".$resm
?>
</body>
</html>