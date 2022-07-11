<?php  

$localhost = "localhost"
$username = "id19018113_root"
$password = "Demian1981_#" 
$dbname = "id19018113_final"

$con new mysqli ($localhost, $username, $password, $dbname);
if ($con->connect_error) {
    die ("connection failed: ", $con->connect_error);
}
// Conecto mi form /name con el server a través de los name
$nombre = $_POST["name"];
$mail = $_POST["email"];        
$asunto =
$mensaje = $_POST["message"];

// Vamos a mostrar un texto plano 
$header .= "Content-type: text/plain";

// Cómo me va a llegar el cuerpo del mail. \r\n es para 
$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "Su email es" . $mail . "\r\n";
$mensaje .=
$mensaje .="Mensaje" . $_POST ["message"] . "\r\n";
$mensaje .= "Enviado el" . date("d/m/y",time())

$para = "abbottdemian@gmail.com";
$asunto = "Mensaje de mi sitio web";

//La función mail envía un correo electrónico y el orden es:
// A quién se lo envía? - Título del correo - El mensaje - Header para añadir
mail ($para, $asunto, utf8_decode($mensaje), $header);

//Redirección al haber enviado el form
header ("Location:index.html")
?>
