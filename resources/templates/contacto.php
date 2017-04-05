hola soy el contacto



<?php 
	if ($status=='error') {
		echo "ha ocurrido un error<br>";
	}else if($status=='ok') {
		echo "peticion correcta<br>";
	}
	
?>

<br>
<a href="<?php echo url('inicio') ?>">inicio</a>