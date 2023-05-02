<?php
/**
*	Simular una transferencia de dinero entre usuarios para
*	explotarlo con un ataque CSRF
*
*	@author parzibyte.me/blog
*/
$desde = $_GET["desde"];
$para = $_GET["para"];
$cantidad = floatval($_GET["cantidad"]);
file_put_contents("transferencias.txt", "Se transfieren $cantidad desde $desde para $para" . PHP_EOL, FILE_APPEND);
echo "OK";
?>