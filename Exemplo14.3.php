<html>
<head>
<meta charset="utf-8"/>
<title>Ster 2B</title>
</head>
<body>
<?php
function testeStatic(){
static $a=0;
$a += 25;
echo "Valor da Vari�vel a = $a <br>";
}
echo"<h1>Vari�vel Est�tica</h1>";
testeStatic();
testeStatic();
testeStatic();
?>
</body>
</html>
