<?php
/**
*	Prevenir ataque CSRF con un token
*
*	@author parzibyte.me/blog
*/
$desde = $_GET["desde"];
$para = $_GET["para"];
$cantidad = floatval($_GET["cantidad"]);
$token = $_GET["token_csrf"];

#Aquí iniciamos la sesión si no está iniciada, esto es para leer el token que guardamos anteriormente
if(session_status() !== PHP_SESSION_ACTIVE){
	session_start();
}

#Comparamos tokens...
if(strcmp($token, $_SESSION["token"]) === 0){
	file_put_contents("transferencias.txt", "Se transfieren $cantidad desde $desde para $para" . PHP_EOL, FILE_APPEND);
	echo "OK";
}else{
	file_put_contents("transferencias.txt", "NO se ha transferido $cantidad desde $desde para $para porque el token no coincide!" . PHP_EOL, FILE_APPEND);
	echo "NO";
}
?>