<!DOCTYPE html>
<html>
<head>
	<title> Meu site</title>
	<style type="text/css">
		a{
			color: white;
			text-decoration: none;
			font-size: 35px;
			padding: 6px;
		}
		a:hover{
			text-decoration: underline;
		}
	</style>
</head>
<body style="margin: 0px; padding: 0px;">
	<div style="height: 80px; width: 100%; background: black; text-align: right;">
		<a href=" <?php echo BASE_URL; ?>"> Home |</a>
		<a href=" <?php echo BASE_URL; ?>galeria"> Galeria</a>
	</div>


	<?php $this->loadViewInTemplete($viewName, $viewData); ?>
</body>
</html>