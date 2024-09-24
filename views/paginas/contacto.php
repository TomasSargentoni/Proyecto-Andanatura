<main class="contenedor">
    <h2>ENCUESTA PARA DIAGNOSTICAR EL ESTADO DE MADUREZ DIGITAL DE LA EMPRESA</h2>

    <form class="formulario" action="" method="POST">
        <?php
        // Generar preguntas dinámicamente
        foreach ($preguntas as $index => $pregunta) { ?>
                <?php 
                    // Mostrar el tema correspondiente antes de la pregunta
                    if ($index == 0) {
                        echo '<h4>' . "Sección " . $temas[0] . '</h4>'; // Tema para la pregunta 0
                    } elseif ($index == 6) {
                        echo '<h4>' . "Sección ". $temas[1] . '</h4>'; // Tema para la pregunta 7
                    } elseif ($index == 9) {
                        echo '<h4>' . "Sección ". $temas[2] . '</h4>'; // Tema para la pregunta 10
                    } elseif ($index == 16) {
                        echo '<h4>' . "Sección ". $temas[3] . '</h4>'; // Tema para la pregunta 17
                    } elseif ($index == 26) {
                        echo '<h4>' . "Sección ". $temas[4] . '</h4>'; // Tema para la pregunta 27
                    } elseif ($index == 30) {
                        echo '<h4>' . "Sección ". $temas[5] . '</h4>'; // Tema para la pregunta 31
                    }
                ?>
                <br><label class="pregunta"><?php echo ($index + 1) . ". " . $pregunta; ?></label><br>
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
