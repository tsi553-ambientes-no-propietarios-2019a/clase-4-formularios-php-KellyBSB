<?php 
$numdia=0;
$mes=
 array('Enero','Febrero','Marzo',
'Abril','Mayo','Junio','Julio',
'Agosto','Septiembre','Octubre',
'Noviembre','Diciebre');
 $Dia= array('Martes','Miercoles','Jueves','Vienes','Sabado','Domingo','Lunes');

echo '<ul>';
 if($mes[0]){
echo '<strong>'.$mes[0].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=1 && $numero<=31){
echo '<li id="mes1" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}
if($mes[1]){
echo '<strong>'.$mes[1].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=32 && $numero<=59){
echo '<li id="mes2" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}
if($mes[2]){
echo '<strong>'.$mes[2].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=60 && $numero<=90){
echo '<li id="mes3" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}
if($mes[3]){
echo '<strong>'.$mes[3].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=91 && $numero<=120){
echo '<li id="mes4" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}

if($mes[4]){
echo '<strong>'.$mes[4].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=121 && $numero<=151){
echo '<li id="mes5" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}
if($mes[5]){
echo '<strong>'.$mes[5].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=152 && $numero<=181){
echo '<li id="mes6" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}
if($mes[6]){
echo '<strong>'.$mes[6].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=182 && $numero<=212){
echo '<li id="mes7" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}
if($mes[7]){
echo '<strong>'.$mes[7].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=213 && $numero<=243){
echo '<li id="mes8" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}
if($mes[8]){
echo '<strong>'.$mes[8].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=244 && $numero<=273){
echo '<li id="mes9" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}
if($mes[9]){
echo '<strong>'.$mes[9].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=274 && $numero<=304){
echo '<li id="mes10" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}
if($mes[10]){
echo '<strong>'.$mes[10].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=305 && $numero<=334){
echo '<li id="mes11" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}

if($mes[11]){
echo '<strong>'.$mes[11].'</strong>';
foreach(range(1, 365) as $numero) {  
if($numero>=335 && $numero<=365){
echo '<li id="mes12" type ="square">Dia '.$numero.' '.$Dia[$numdia].'</li>';
$numdia++;
if($numdia>6){
	$numdia=0;
}
}
} 
}




echo '</ul>';



?>  