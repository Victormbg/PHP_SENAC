<html>
<head>
<title>PHP aula 4</title>
</head>
<body>
<?php
$vetor=array(1,2,3,4,5,6,7,8,9,10);
$maior=-1;
$posicao=-1;
for($i=0;$i<sizeof($vetor);$i++){
	if($maior<$vetor[$i]){
		$maior = $vetor[$i];
		$posicao =$i;
	}
}
echo"Maior elemento".$maior."esta armazenado na posicao".$posicao;
?>
</body>
</html>