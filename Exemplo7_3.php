<Html>
<Head>
 <Title>Ster 2B </Title>
</Head>
<Body>
<center>
<?php
$altura=1.58;
$peso=62;
$imc=$peso/($altura*$altura);
if($imc<18.5){
echo ($imc+" classifica��o magreza");
}else if(($imc>18.5)&&($imc<24.9)){
echo ($imc+" classifica��o saud�vel");
}else if(($imc>25.0)&&($imc<29.9)){
echo ($imc+" classifica��o sobrepeso");
}else if(($imc>30.0)&&($imc<39.9)){
echo ($imc+" classifica��o obesidade grau 1");
}else if(($imc>35.0)&&($imc<39.9)){
echo ($imc+" classifica��o obesidade grau 2");
}else if($imc>=40){
echo($imc+" classifica��o obesidade grau 3(m�rbida)");
}
?>
</center>
</Body>
</Html>
