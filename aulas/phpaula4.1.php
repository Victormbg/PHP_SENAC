<html>
<head>
<title>PHP aula 4</title>
</head>
<body>
<?php
$vetor[0][0]="A";
$vetor[0][1]="B";
$vetor[1][0]="C";
$vetor[1][1]="D";
for($i=0;$i<2;$i++)
	for($k=0;$k<2;$k++){
	for($k=0;$k<2;$k++){
		echo"O elemento da posicao$i,$k e".$vetor[$i][$k].
"<br/>";		
	}
}
?>
</body>
</html>