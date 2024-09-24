<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Andanatura</title>
    <link rel="stylesheet" href="../build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : '';?>">
                <div class="logo">
                    <img src="/build/img/logo.jpg" alt="Logotipo de Andanatura">
                </div>
    </header>

    <?php echo "$contenido"; ?>

    <footer class="footer seccion">
        <p class="copyright">ANDANATURA - Todos los derechos Reservados <?php echo date("Y") ?> &copy;</p>
    </footer>

    <script src="../build/js/bundle.min.js"></script>
        
</body>
</html>