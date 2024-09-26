<?php
// Activa la visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Asegúrate de que la ruta sea correcta
require '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

function generarPDF($datosEmpresa, $suma, $mensaje) {
    // Opciones para configurar DOMPDF
    $options = new Options();
    $options->set('defaultFont', 'Courier');
    $options->set('isHtml5ParserEnabled', true); // Habilitar el parser HTML5

    $dompdf = new Dompdf($options);

    // Cargar el contenido HTML
    $html = '<h1 style="text-align: center;">Hola Mundo</h1>';

    $html .= 'Los datos de la empresa son: ' . $datosEmpresa . '<br>' .
        'Las puntuaciones de cada etapa y la total son: ' . $suma . '<br>' .
        'Su mensaje:' . $mensaje;

    $dompdf->loadHtml($html);

    // Configurar el tamaño de papel y la orientación
    $dompdf->setPaper('A4', 'portrait');

    // Renderizar el PDF
    $dompdf->render();

    // Obtener el contenido del PDF generado
    $pdfContent = $dompdf->output();

    // Llamar a la función para enviar el correo con el PDF en memoria
    $enviado = enviarEmail($pdfContent);

    // Mostrar el PDF en el navegador solo si se envió el correo
    if ($enviado) {
        mostrarPDF($pdfContent);
    } else {
        echo "Error al enviar el correo.";
    }
}

function mostrarPDF($pdfContent) {
    // Asegúrate de que no haya salida previa
    if (ob_get_length()) {
        ob_end_clean(); // Limpiar el buffer de salida si hay algo
    }

    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="mi_documento.pdf"');
    echo $pdfContent;
    exit; // Termina la ejecución del script después de mostrar el PDF
}
