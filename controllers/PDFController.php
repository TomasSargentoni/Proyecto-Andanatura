<?php
// Activa la visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Asegúrate de que la ruta sea correcta
require '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

function generarPDF() {
    // Opciones para configurar DOMPDF
    $options = new Options();
    $options->set('defaultFont', 'Courier');
    $options->set('isHtml5ParserEnabled', true); // Habilitar el parser HTML5

    $dompdf = new Dompdf($options);

    // Cargar el contenido HTML
    $html = '<h1 style="text-align: center;">Hola Mundo</h1>';
    $html .= '<p>Este es un ejemplo de PDF generado con DOMPDF.</p>';
    $dompdf->loadHtml($html);

    // Configurar el tamaño de papel y la orientación
    $dompdf->setPaper('A4', 'portrait');

    // Renderizar el PDF
    $dompdf->render();

    // Guardar el PDF en el sistema de archivos
    file_put_contents('mi_documento.pdf', $dompdf->output());

    // Mostrar el PDF en el navegador
    $dompdf->stream('mi_documento.pdf', array('Attachment' => false));
}
