
<html>
<head>
	<title>Ster 2B</title>
</head>
<body>
<center>
<?php
echo "<h1>Estrutura condicional SWITCH</h1>";
$dia=getdate();
switch ($dia['wday']) {
	case 5:
	echo "Finalmente Sexta!!!";
		break;
		case 6:
		echo "Super Sabado! =)";
		break;
		case 0:
		echo "Domingo Sonolento! ";
	breaak;
	default:
		echo "Estou esperando pelo fim de semana! ";
		break;
}
?>
</center>
</body>
</html>
