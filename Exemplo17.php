<html>
<head>
<meta charset="utf-8"/>
<title>Ster 2B</title>
</head>
<body>
<?php
echo"<h1>Lendo um Vetor</h1>";
$frutas=array("Laranja","Ma��","Uva","Banana","Mam�o");
foreach($frutas as $valor){
echo"<li>Fruta: $valor</li>";
}
echo"<br>";
$dados = array("Nome"=>"Maria Stefany" ,
" rua"=>"S�o Jo�o" ,
" bairro"=>"Cidade dos Campos" ,
" cidade"=>"S�o Paulo");
foreach($dados as $chave => $valor){
echo"$chave : $valor";
}
?>
</body>
</html>
