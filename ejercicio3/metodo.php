<?php

$array=[

'Kelly'=>'kelly',
'Karla'=>'karla',
'Hector'=>'hector',
'Dayana'=>'dayana',
'Diana'=>'diana'
];

$mensaje=false;
$mensaje1=false;

	$user='';
	$pass='';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$user = trim($_POST['user']);
		$pass = $_POST['pass'];

foreach ($array as $key => $value) {
	
 if($user==$key && $pass==$value){ 
	$mensaje=true;	
	}else{
		$mensaje1=true;
	} 
}

if($mensaje==true){
echo'Bienvenido';
}elseif($mensaje1==true){
	echo'Datos incorrectos';
}

}