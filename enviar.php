<?php
//Vinculo a pagina web que se procesará cuando el formulario se envie:
$pagina = "gracias.html";
Header("Location: $pagina");
//Información de destino:
$para = 'rubenmoreno1999@gmail.com';
$asunto = 'Nuevo mensaje de tu Portfolio';
//Recogida de datos del formulario en variables:
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
//Se redacta la información que se va a enviar:
$contenido = "Este mensaje fue enviado por " . $nombre . " \r\n";
$contenido .= "Su e-mail es: " . $email . " \r\n";
$contenido .= "Su teléfono es: " . $telefono . " \r\n";
$contenido .= "Su mensaje es: " . $mensaje . " \r\n";
//Se produce el envio finalmente:
mail($para, $asunto, $contenido);
?>
