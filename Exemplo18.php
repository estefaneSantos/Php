<html>
<head>
<meta charset="utf-8"/>
<title>Ster 2B</title>
</head>
<body>
<?PHP
$carros["Palio"]["cor"]="Azul";
$carros["Palio"]["pot�ncia"]="1.0";
$carros["Palio"]["opcionais"]="Ar Condicionado";
$carros["corsa"]["cor"]="Cinza";
$carros["corsa"]["pot�ncia"]="1.3";
$carrod["corsa"]["opcionais"]="MP3";
$carros["Gol"]["cor"]="Branco";
$carros["Gol"]["pot�ncia"]="1.0";
$carros["Gol"]["opcionais"]="Met�lica";
foreach ($carros as $modelos => $caracteristicas){
 echo"<b>  Modelo". $modelos."</b>";
 echo"</br>";
 foreach($caracteristicas as $caracteristicas => $valor){
  echo"$caracteristicas : $valor";
  echo"</br></br>";
  }
  }
  ?>
</body>
</html>
