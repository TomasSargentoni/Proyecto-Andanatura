<?php


define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGENES', $_SERVER["DOCUMENT_ROOT"] . '/imagenes/');


function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) {
    $s = htmlspecialchars($html);
    return $s;
}

function obtenerTextoResultante(int $total) {

    // Devuelve el texto correcto dependiendo el resultado total

    $mensajeAlta = "<html> Alta Madurez Digital (150-185 puntos): \n
    Descripción: Su empresa se encuentra en un nivel avanzado de madurez digital. Tiene una infraestructura tecnológica sólida, con acceso equitativo a dispositivos y conectividad. Se aprovechan las tecnologías emergentes, como inteligencia artificial y análisis de datos, y los empleados están bien capacitados en habilidades digitales. Hay un compromiso claro con la seguridad y el cumplimiento de normativas, y se asegura que todos los empleados, incluso los que trabajan en áreas remotas, tienen el acceso necesario a la infraestructura digital. \n
    Recomendaciones: \n
    o Mantén las actualizaciones continuas de infraestructura y formación digital. \n
    o Sigue explorando e implementando nuevas tecnologías para mantener la ventaja competitiva. \n
    o Refuerza la cultura de ciberseguridad y revisa constantemente los protocolos. \n
    o Revisa el plan estratégico para atraer y retener talento digital, asegurándote de adaptarlo a las nuevas tendencias tecnológicas. </html>";

    $mensajeMedia = "Madurez Digital Media (100-149 puntos): \n
    Descripción: Su empresa tiene una buena base tecnológica, pero hay áreas de mejora. Aunque ya existe un acceso adecuado a tecnologías digitales y un enfoque en automatización y análisis de datos, algunas partes de la empresa pueden no estar completamente alineadas. Puede que haya disparidades entre empleados en términos de acceso a la tecnología o formación, o que la empresa no esté utilizando al máximo las nuevas tecnologías. \n
    Recomendaciones: \n
    o Fortalece la formación en habilidades digitales para los empleados, asegurando que los que tienen menos experiencia también reciban entrenamiento. \n
    o Revisa la infraestructura de conectividad, sobre todo para empleados en áreas remotas. \n
    o Evalúa la implementación de tecnologías emergentes y sistemas de automatización en áreas donde aún no se han integrado. \n
    o Refuerza los protocolos de seguridad digital, asegurando que estén actualizados y bien implementados. \n
    o Mejora el uso de herramientas colaborativas y de marketing digital para maximizar la eficiencia operativa y la visibilidad online.";

    $mensajeBaja = "Baja Madurez Digital (Menos de 100 puntos): \n
    Descripción: Su empresa tiene un bajo nivel de madurez digital. Esto significa que existen muchas áreas críticas que necesitan atención, como la infraestructura tecnológica, la capacitación en habilidades digitales, la seguridad cibernética, y la equidad en el acceso a herramientas digitales. La empresa puede estar enfrentando dificultades para adaptarse al entorno digital actual, lo que podría afectar su competitividad y eficiencia. \n
    Recomendaciones: \n
    o Realiza inversiones inmediatas en infraestructura tecnológica y conectividad para asegurar que todos los empleados tengan acceso adecuado. \n
    o Implementa un plan integral de formación en habilidades digitales para todo el personal. \n
    o Refuerza las medidas de seguridad digital, instalando y actualizando sistemas de protección como firewalls, antivirus y herramientas de monitoreo. \n
    o Introduce sistemas de automatización y análisis de datos para mejorar la eficiencia en la toma de decisiones. \n
    o Explora la adopción de tecnologías emergentes que pueden traer ventajas competitivas. \n
    o Revisa el cumplimiento de las normativas de protección de datos, como el GDPR, y asegúrate de implementar medidas de seguridad para proteger los datos de los clientes.";


    if ($total >= 150 && $total <= 185) {
        $mensaje = $mensajeAlta;
    }

    elseif ($total >= 100 && $total <= 149) {
        $mensaje = $mensajeMedia;

    }
    else {
        $mensaje = $mensajeBaja;
    }

    $mensajeConSaltos = nl2br($mensaje);

    $mensajeFinal = 'Su nivel de madurez digital se sitúa en ' . $total . ' de un total de 185. <br />' . $mensajeConSaltos;
    return $mensajeFinal;

}


function sumarResultados($numeros) {

    
    $numerosEtapaUno = array_map('strval', array_slice($numeros, 0, 6));
    $puntajeUno = array_sum($numerosEtapaUno);

    if ($puntajeUno >= 24 && $puntajeUno <= 30) {
        $nivelEtapaUno = "Alta";
    }
    elseif ($puntajeUno >= 15 && $puntajeUno <= 23) {
        $nivelEtapaUno = "Moderada";
    }
    else {
        $nivelEtapaUno = "Baja";
    }



    $numerosEtapaDos = array_map('strval',array_slice($numeros, 6, 3));
    $puntajeDos = array_sum($numerosEtapaDos);

    if ($puntajeDos >= 12 && $puntajeDos <= 15) {
        $nivelEtapaDos = "Alta";
    }
    elseif ($puntajeDos >= 8 && $puntajeDos <= 11) {
        $nivelEtapaDos = "Moderada";
    }
    else {
        $nivelEtapaDos = "Baja";
    }


    $numerosEtapaTres = array_map('strval',array_slice($numeros, 9, 7));
    $puntajeTres = array_sum($numerosEtapaTres);

    if ($puntajeTres >= 28 && $puntajeTres <= 35) {
        $nivelEtapaTres = "Alta";
    }
    elseif ($puntajeTres >= 18 && $puntajeTres <= 27) {
        $nivelEtapaTres = "Moderada";
    }
    else {
        $nivelEtapaTres= "Baja";
    }


    $numerosEtapaCuatro = array_map('strval',array_slice($numeros, 16, 10));
    $puntajeCuatro = array_sum($numerosEtapaCuatro);

    if ($puntajeCuatro >= 42 && $puntajeCuatro <= 50) {
        $nivelEtapaCuatro = "Alta";
    }
    elseif ($puntajeCuatro >= 28 && $puntajeCuatro <= 41) {
        $nivelEtapaCuatro = "Moderada";
    }
    else {
        $nivelEtapaCuatro= "Baja";
    }


    $numerosEtapaCinco = array_map('strval',array_slice($numeros, 26, 4));
    $puntajeCinco = array_sum($numerosEtapaCinco);

    if ($puntajeCinco >= 16 && $puntajeCinco <= 20) {
        $nivelEtapaCinco = "Alta";
    }
    elseif ($puntajeCinco >= 10 && $puntajeCinco <= 15) {
        $nivelEtapaCinco = "Moderada";
    }
    else {
        $nivelEtapaCinco = "Baja";
    }


    $numerosEtapaSeis = array_map('strval',array_slice($numeros, 30, 7));
    $puntajeSeis = array_sum($numerosEtapaSeis);

    if ($puntajeSeis >= 26 && $puntajeSeis <= 35) {
        $nivelEtapaSeis = "Alta";
    }
    elseif ($puntajeSeis >= 15 && $puntajeSeis <= 25) {
        $nivelEtapaSeis= "Moderada";
    }
    else {
        $nivelEtapaSeis = "Baja";
    }

    $resultados = [];

    array_push($resultados, $nivelEtapaUno);
    array_push($resultados, $nivelEtapaDos);
    array_push($resultados, $nivelEtapaTres);
    array_push($resultados, $nivelEtapaCuatro);
    array_push($resultados, $nivelEtapaCinco);
    array_push($resultados, $nivelEtapaSeis);

    $sumaTotal = $puntajeUno + $puntajeDos + $puntajeTres + $puntajeCuatro + $puntajeCinco + $puntajeSeis;
    array_push($resultados, $sumaTotal);

    return $resultados;

}
