<main class="contenedor">
    <h1 class="texto_principal">ANEXO 1: TEST DE DIAGNÓSTICO Y AUTODIAGNOSTICO DE LA MADUREZ DIGITAL</h1>
    <h2>Encuesta para Diagnosticar el Estado de Madurez Digital de la Empresa</h2>

    <form class="formulario" action="" method="POST">
        <?php
        // Generar preguntas dinámicamente
        foreach ($preguntas as $index => $pregunta) { ?>
                <?php 
                    // Mostrar el tema correspondiente antes de la pregunta
                    if ($index == 0) {
                        echo '<h3>' . $temas[0] . '</h3>'; // Tema para la pregunta 0
                    } elseif ($index == 6) {
                        echo '<h3>' . $temas[1] . '</h3>'; // Tema para la pregunta 7
                    } elseif ($index == 9) {
                        echo '<h3>' . $temas[2] . '</h3>'; // Tema para la pregunta 10
                    } elseif ($index == 16) {
                        echo '<h3>' . $temas[3] . '</h3>'; // Tema para la pregunta 17
                    } elseif ($index == 26) {
                        echo '<h3>' . $temas[4] . '</h3>'; // Tema para la pregunta 27
                    } elseif ($index == 30) {
                        echo '<h3>' . $temas[5] . '</h3>'; // Tema para la pregunta 31
                    }
                ?>
                <label><?php echo ($index + 1) . ". " . $pregunta; ?></label><br>
                <div class="opciones">
                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                        <input type="radio" id="pregunta<?php echo $index+1; ?>_seleccion<?php echo $i; ?>" name="pregunta<?php echo $index+1; ?>" value="<?php echo $i; ?>" required>
                        <label for="pregunta<?php echo $index+1; ?>_seleccion<?php echo $i; ?>"><?php echo $i; ?></label>
                    <?php } ?>
                </div>
        <?php } ?>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>
