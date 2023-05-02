<?php
#Nota: esta función funciona en PHP7. Visita https://parzibyte.me/blog/2018/06/27/generar-token-criptograficamente-seguro-php/
# si tu versión es menor
function generar_token_seguro($longitud)
{
    if ($longitud < 4) {
        $longitud = 4;
    }
 
    return bin2hex(random_bytes(($longitud - ($longitud % 2)) / 2));
}

# Sólo iniciamos la sesión si no la iniciamos antes
if(session_status() !== PHP_SESSION_ACTIVE){
	session_start();
}
$token = generar_token_seguro(40); # La longitud puede variar pero yo la pondré en 40
$_SESSION["token"] = $token;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Hacer transferencias de un banco</title>
</head>
<body>
	<form action="transferir_seguro.php">
		<!-- Aquí abajo inyectamos el token -->
		<input type="hidden" value="<?php echo $token; ?>" name="token_csrf">
		<input placeholder="Remitente" type="text" name="desde"><br>
		<input placeholder="Receptor" type="text" name="para"><br>
		<input placeholder="¿Cuánto transfieres?" type="number" name="cantidad"><br>
		<button type="submit">Realizar transferencia</button>
	</form>
</body>
</html>