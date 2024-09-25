<?php 

namespace Controllers;

use MVC\Router;


class PaginasController {
    public static function index(Router $router) {  
        
        $temas = [
            '1. ACCESO A LA INFRAESTRUCTURA DIGITAL',
            '2. ASEQUIBILIDAD',
            '3. HABILIDADES DIGITALES',
            '4. USO EFECTIVO DE LA TECNOLOGÍA',
            '5. DESIGUALDADES DIGITALES',
            '6. SEGURIDAD DIGITAL Y CUMPLIMIENTO REGULATORIO'
        ];
            
        $preguntas = [
            "¿Cómo calificaría la disponibilidad de dispositivos digitales (computadoras, teléfonos móviles, tabletas) en su lugar de trabajo?",
            "¿Cuentan los empleados con acceso constante a internet de alta velocidad en la oficina?",
            "¿El acceso a la tecnología digital está disponible en todas las áreas de la empresa?",
            "¿Se actualizan sus sistemas y software regularmente para asegurar un buen rendimiento?",
            "¿Los empleados tienen acceso remoto seguro a los sistemas de la empresa (por ejemplo,mediante VPNs o trabajo en la nube)?",
            "¿Tienen planes para prevenir fallos en la infraestructura digital, como copias de seguridad o planes de recuperación ante desastres?",
            "¿Su empresa puede invertir en tecnologías digitales modernas sin afectar significativamente otros presupuestos?",
            "¿Su empresa se asegura de que los costes de conectividad (internet de alta velocidad) sean accesibles para todos los empleados, incluidos aquellos que trabajan desde áreas remotas?",
            "¿La empresa ofrece apoyo o subsidios para que los empleados obtengan dispositivos o servicios de internet para trabajar desde casa?",
            "¿Cómo calificaría el nivel general de habilidades digitales (conocimiento tecnológico) de losempleados en su empresa?",
            "¿La empresa ofrece capacitación continua para mejorar las habilidades digitales de los empleados (como cursos de software, ciberseguridad, programación)?", 
            "¿Los empleados son capaces de resolver problemas tecnológicos cotidianos sin necesidad de recurrir constantemente al soporte técnico?",
            "¿Su empresa ofrece formación regular en habilidades digitales básicas (como uso del correo electrónico, redes sociales, mensajería)?",
            "¿Utilizan herramientas de formación en línea (e-learning) para el desarrollo del personal?",
            "¿El equipo directivo está bien informado sobre transformación digital y tendencias tecnológicas para guiar la innovación en la empresa?",
            "¿Existe un plan estratégico para atraer y retener talento digital en la empresa? ¿Consideranel nivel de habilidades digitales en la selección y retención de empleados?",
            "¿Los empleados utilizan regularmente herramientas digitales colaborativas (como Microsoft Teams, Google Workspace, Slack) para trabajar en equipo?",
            "¿La empresa utiliza servicios digitales para tareas cotidianas como facturación electrónica,firmas digitales o plataformas de comercio electrónic",
            "¿Su empresa vende productos o servicios en línea mediante sistemas de comercio electrónico?",
            "¿Usan estrategias de marketing digital (SEO, SEM, redes sociales) para atraer clientes y mejorar la presencia en línea?",
            "¿La empresa utiliza tecnología digital para mejorar la toma de decisiones, como análisis de datos o software de gestión empresarial?",
            "¿Tienen sistemas digitales que automatizan procesos y tareas repetitivas (por ejemplo, CRM, ERP, automatización de marketing)?",
            "¿Utilizan sistemas de análisis de datos (Big Data, Analytics) para mejorar la toma de decisiones?",
            "¿Han adoptado tecnologías emergentes como inteligencia artificial, blockchain o internet de las cosas (IoT) en sus operaciones?",
            "¿Utilizan herramientas de inteligencia artificial para personalizar productos o servicios, o mejorar la atención al cliente?",
            "¿Su empresa usa plataformas colaborativas en la nube para gestionar y almacenar datos?",
            "¿Existen diferencias significativas en el acceso a la tecnología entre los empleados que trabajan en áreas urbanas y aquellos que trabajan en áreas rurales o remotas?",
            " ¿Su empresa asegura que todos los empleados, independientemente de su edad o nivel educativo, reciban la misma formación y acceso a herramientas digitales?",
            "¿Cree que la tecnología está integrada de manera equitativa en todos los departamentos de la empresa?",
            "¿La empresa ofrece programas de formación para ayudar a los empleados con menos habilidades digitales a mejorar y cerrar las brechas?",
            "¿Conocen y cumplen con las regulaciones de protección de datos (como el GDPR)?",
            "¿Su empresa cuenta con sistemas de protección, como antivirus, firewall y herramientas de monitoreo de ciberseguridad?",
            "¿Realizan auditorías de ciberseguridad para identificar vulnerabilidades en sus sistemas?",
            "¿Tienen un protocolo de actuación en caso de ataques o incidentes de ciberseguridad?",
            "¿Han implementado medidas de seguridad para proteger los datos personales de los clientes, como la encriptación o anonimización?",
            "¿Su empresa utiliza los servicios de administración electrónica (como facturación electrónica y trámites digitales con la administración pública)?",
            "¿Su empresa interactúa con los servicios de administración electrónica para trámites fiscales y regulatorios de manera digital?" 
        ];

        if($_SERVER["REQUEST_METHOD"] === "POST") {

            $numeros = array_slice($_POST, 0, 37);
            $suma = sumarResultados($numeros);

            debuguear(obtenerTextoResultante($suma[6]));
            
        }

        $router->render("paginas/contacto", [
            'preguntas' => $preguntas,
            'temas' => $temas,
        ]);
    }
}


?>