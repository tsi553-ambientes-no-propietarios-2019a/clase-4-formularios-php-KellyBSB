<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
<form method="post">
	<div>
		<label>User: </label>
		<input type="text"  name="user" required="required">
	</div>
	<div>
		<label> CONFIRMAR User: </label>
		<input type="text"  name="user2" required="required">
	</div>
	<div>
		<label>Pass: </label>
		<input type="password" name="pass" required="required">
	</div>
	<div>
		<label> CONFIRMAR Pass: </label>
		<input type="password" name="pass2" required="required">
	</div>

	<button name="guardar">Guardar</button>
</form>


<?php  include('validarRegistro.php');  ?>



</body>
</html>