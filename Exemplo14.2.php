<html>
<head>
<meta charset="utf-8"/>
<title>Ster 2B</title>
</head>
<body>
<?php
function testeGlobal(){
global $a;
$a=25;
}
echo"<h1>Vari�vel Global</h1>";
$a=0;
testeGlobal();
echo"Valor da Vari�vel a = $a";
?>
</body>
</html>
