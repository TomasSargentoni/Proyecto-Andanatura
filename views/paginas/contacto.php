<main class="contenedor">

    <?php 
        if($mensaje) { ?>
            <p class="alerta exito"> <?php echo $mensaje; ?></p>;
    <?php } ?>

    <h1 class="texto_principal">ANEXO 1: TEST DE DIAGNÓSTICO Y AUTODIAGNOSTICO DE LA MADUREZ DIGITAL</h1>

    <form class="formulario" action="/contacto" method="POST">
        <fieldset>
            <legend>Informacion Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="contacto[mensaje]" required></textarea>
                    
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>