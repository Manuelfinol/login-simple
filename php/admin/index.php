<?php include("../login/logueo.php"); ?>
<?php 
    if ($tipo <> 1) {
        echo '<script language="javascript">alert("ACCESO DENEGADO");</script>';
        echo "<script>location.href='../../index.html';</script>";
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
</head>
<body>
	<header>
		<nav>
			<a href="../login/cerrarSesion.php">Cerrar Sesión</a>
		</nav>
	</header>
	<h1>Hola Administrador <?php echo $nombre; ?></h1>
</body>
</html>