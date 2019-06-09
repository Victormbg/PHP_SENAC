<html>
<head>
<title>PHP aula 4</title>
</head>
<body>
<?php
	$vetor=array(1,3,5,8,11,12,15,20);
	for($i=0;$i<sizeof($vetor);$i++){
	if($vetor[$i]%2==0){
		echo"O numero $vetor[$i] e par<br/>";
		}
	}
?>
</body>
</html>