<?php 
$restan=0;
$num=365;
foreach(range(1, 365) as $numero) {  

if($numero>=1 && $numero<=31){

$restan=$num-$numero;
echo 'Dia '.$numero." del mes de Enero, faltan ".$restan." dias para que acabe el año".'<br>';

}elseif($numero>=32 && $numero<=59){

$restan=$num-$numero;
echo 'Dia '.$numero." del mes de Febrero, faltan ".$restan." dias para que acabe el año".'<br>';


}elseif($numero>=60 && $numero<=90){

$restan=$num-$numero;
echo 'Dia '.$numero." del mes de Marzo, faltan ".$restan." dias para que acabe el año".'<br>';

}elseif($numero>=91 && $numero<=120){

$restan=$num-$numero;
echo 'Dia '.$numero." del mes de Abril, faltan ".$restan." dias para que acabe el año".'<br>';

}elseif($numero>=121 && $numero<=151){

$restan=$num-$numero;
echo 'Dia '.$numero." del mes de Mayo, faltan ".$restan." dias para que acabe el año".'<br>';

}elseif($numero>=151 && $numero<=181){

$restan=$num-$numero;
echo 'Dia '.$numero." del mes de Junio, faltan ".$restan." dias para que acabe el año".'<br>';

}elseif($numero>=182 && $numero<=212){

$restan=$num-$numero;
echo 'Dia '.$numero." del mes de Julio, faltan ".$restan." dias para que acabe el año".'<br>';

}elseif($numero>=213 && $numero<=243){

$restan=$num-$numero;
echo 'Dia '.$numero." del mes de Agosto, faltan ".$restan." dias para que acabe el año".'<br>';

}elseif($numero>=244 && $numero<=273){

$restan=$num-$numero;
echo 'Dia '.$numero." del mes de Septiembre, faltan ".$restan." dias para que acabe el año".'<br>';

}elseif($numero>=274 && $numero<=304){

$restan=$num-$numero;
echo 'Dia '.$numero." del mes de Octubre, faltan ".$restan." dias para que acabe el año".'<br>';

}elseif($numero>=305 && $numero<=334){

$restan=$num-$numero;
echo 'Dia '.$numero." del mes de Noviembre, faltan ".$restan." dias para que acabe el año".'<br>';

}elseif($numero>=335 && $numero<=365){
$restan=$num-$numero;

echo 'Dia '.$numero." del mes de Diciembre, faltan ".$restan." dias para que acabe el año".'<br>';
if($restan<5){
	echo 'Falta poco para año nuevo'.'<br>';
}

}

}


?>  