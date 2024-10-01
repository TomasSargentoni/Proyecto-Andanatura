<?php
// Cargar Composer's autoloader
require '../vendor/autoload.php'; // Asegúrate de que esta ruta sea correcta

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarEmail($pdfContent) {
    // Instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor de correo SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Servidor SMTP de Gmail
        $mail->SMTPAuth   = true;
        $mail->Username   = 'digitalizacion.andanatura@gmail.com'; // Tu dirección de correo Gmail
        $mail->Password   = 'tbjm japs jdxd lmwa'; // Tu contraseña de aplicación
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Remitente
        $mail->setFrom('digitalizacion.andanatura@gmail.com', 'Andanatura');
        
        // Destinatarios
        $mail->addAddress('manu.lucero07@gmail.com'); // Dirección del primer destinatario
        $mail->addAddress('tomassargentoni92@gmail.com'); // Dirección del segundo destinatario

        // Contenido del email
        $mail->isHTML(true);  // Configurar formato HTML
        $mail->Subject = 'Prueba1';

        $mail->Body    = '<b>Resultados test</b>.';
        $mail->AltBody = '<b>Resultados test</b>.';

        // Adjuntar el PDF generado
        $mail->addStringAttachment($pdfContent, 'mi_documento.pdf', 'base64', 'application/pdf');
        
        // Enviar el correo
        if ($mail->send()) {
            echo 'El correo ha sido enviado con éxito';
            return true; // Retornar true si el correo fue enviado
        } else {
            echo "Error al enviar el correo: {$mail->ErrorInfo}";
            return false; // Retornar false si hubo un error
        }
    } catch (Exception $e) {
        // Captura de errores
        echo "Error al enviar el correo: {$e->getMessage()}";
        return false; // Retornar false en caso de excepción
    }
}
