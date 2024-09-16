<?php 

namespace Controllers;

use MVC\Router;
use PHPMailer\PHPMailer\PHPMailer;


class PaginasController {
    public static function index(Router $router) {  
        
        $mensaje = null;

        if($_SERVER["REQUEST_METHOD"] === "POST") {
         
            $respuestas = $_POST["contacto"];

            // Crear una instancia de PHPMailer
            $mail = new PHPMailer();

            // Configurar SMTP
            $mail->isSMTP();
            $mail->Host = $_ENV["EMAIL_HOST"];
            $mail->SMTPAuth = true;
            $mail->Port = $_ENV["EMAIL_PORT"];
            $mail->Username = $_ENV["EMAIL_USER"];
            $mail->Password = $_ENV["EMAIL_PASS"];

            // Configurar el contenido del mail
            $mail->setFrom("admin@bienesraices.com");
            $mail->addAddress("admin@bienesraices.com", "BienesRaices.com");
            $mail->Subject = "Tienes un nuevo Mensaje";

            // Habilitar el HTML
            $mail->isHTML(true);
            $mail->CharSet = "UTF-8";

            // Definir el contenido
            $contenido = "<html>";
            $contenido .= "<p>Tienes un nuevo mensaje</p>";
            $contenido .= "<p>Nombre: " .  $respuestas["nombre"] . "</p>";
            
            // Enviar de forma condicional algunos campos de email o telefono
            if($respuestas["contacto"] === "telefono") {

                $contenido .= "<p>Eligio ser contactado por Telefono: </p>";
                $contenido .= "<p>Telefono: " .  $respuestas["telefono"] . "</p>";
                $contenido .= "<p>Fecha Contacto: " .  $respuestas["fecha"] . "</p>";
                $contenido .= "<p>Hora: " .  $respuestas["hora"] . "</p>";

            } else {

                // Es email, entonces agregamos el campo de email
                $contenido .= "<p>Eligio ser contactado por Email: </p>";
                $contenido .= "<p>Email: " .  $respuestas["email"] . "</p>";

            }

            $contenido .= "<p>Mensaje: " .  $respuestas["mensaje"] . "</p>";
            $contenido .= "<p>Vende o Compra: " .  $respuestas["tipo"] . "</p>";
            $contenido .= "<p>Precio o Presupuesto: $" .  $respuestas["precio"] . "</p>";
            $contenido .= "<p>Prefiere ser contactado por: " .  $respuestas["contacto"] . "</p>";
            $contenido .= "</html>";

            $mail->Body = $contenido;
            $mail->AltBody = "Esto es un texto alternativo sin HTML";   

            // Enviar el mail
            if($mail->send()) {
                $mensaje = "Mensaje enviado Correctamente";
            } else {
                $mensaje = "El mensaje no se pudo enviar...";
            }
            
        }

        $router->render("paginas/contacto",[
            "mensaje" => $mensaje
        ]);
    }
}


?>