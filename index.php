<?php 
	(isset($_GET['modulo']))?$mod=$_GET['modulo']:$mod='inicio';
	(isset($_GET['status']))?$status=$_GET['status']:$status='';

	function url($modu = null,$stat = null)
	{
			$url="/index.php";
			$url.=($modu)?"?modulo=".$modu:"?modulo=inicio";
			$url.=($stat)?"&status=".$stat:"";

			return $url;
	}
?>
<html>
	<head>
		<title>Hola</title>
	</head>
	<body>

	<div class="container">
	<?php 
		if(is_file("./resources/templates/".$mod.".php")){
			require_once("./resources/templates/".$mod.".php"); 
		}else{
			require_once("./resources/templates/404.php"); 
		}
	?>
	</div>  

	</body>
</html>