<main class="contenedor">
    <h2>Encuesta para Diagnosticar el Estado de Madurez Digital de la Empresa</h2>

    <form class="formulario" method="POST">
    <?php
        // Generar preguntas dinámicamente
        foreach ($preguntas as $index => $pregunta) { ?>
            <?php 
                // Mostrar el tema correspondiente antes de la pregunta
                if ($index == 0) {
                    echo '<h3>' . "Seccion " . $temas[0] . ' [<span id="puntaje1">0</span>]</h3>'; // Tema 1
                } elseif ($index == 6) {
                    echo '<h3>' . "Seccion " . $temas[1] . ' [<span id="puntaje2">0</span>]</h3>'; // Tema 2
                } elseif ($index == 9) {
                    echo '<h3>' . "Seccion " . $temas[2] . ' [<span id="puntaje3">0</span>]</h3>'; // Tema 3
                } elseif ($index == 16) {
                    echo '<h3>' . "Seccion " . $temas[3] . ' [<span id="puntaje4">0</span>]</h3>'; // Tema 4
                } elseif ($index == 26) {
                    echo '<h3>' . "Seccion " . $temas[4] . ' [<span id="puntaje5">0</span>]</h3>'; // Tema 5
                } elseif ($index == 30) {
                    echo '<h3>' . "Seccion " . $temas[5] . ' [<span id="puntaje6">0</span>]</h3>'; // Tema 6
                }
            ?>
                <label class="preguntas"><?php echo ($index + 1) . ". " . $pregunta; ?></label><br>
                <div class="opciones">
                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                        <input type="radio" id="pregunta<?php echo $index+1; ?>_seleccion<?php echo $i; ?>" name="pregunta<?php echo $index+1; ?>" value="<?php echo $i; ?>" required onchange="actualizarPuntaje(<?php echo $index+1; ?>, <?php echo $i; ?>, obtenerTemaId(<?php echo $index; ?>))">
                        <label class="preguntas" for="pregunta<?php echo $index+1; ?>_seleccion<?php echo $i; ?>"><?php echo $i; ?></label>
                    <?php } ?>
                </div>
        <?php } ?>

        <input type="hidden" id="nombreEmpresaHidden" name="nombreEmpresa">
        <input type="hidden" id="nombreContactoHidden" name="nombreContacto">
        <input type="hidden" id="apellidoContactoHidden" name="apellidoContacto">
        <input type="hidden" id="correoContactoHidden" name="correoContacto">
        <input type="hidden" id="telefonoContactoHidden" name="telefonoContacto">

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>



