<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)){
        $inicio = false;
    }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logo Bienes Raices"> 
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Icono menu responsive">
                </div>

                <div class="derecha">
                    <img src="/build/img/dark-mode.svg" alt="Dark Mode" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/propiedades">Anuncios</a>
                        <a href="/blog">Blog</a>
                        <a href="/contacto">Contacto</a>
                        <a class="log" href="/login">Iniciar Sesion</a>
                        
                        <?php if($auth): ?>
                            <a class="panel" href="/admin">Panel de Control</a>
                            <a href="/logout">Cerrar Sesion</a>
                        <?php endif; ?>
                    </nav>
                </div>

            </div> <!--Cierre de la barra-->

            <?php if($inicio) { ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujos</h1>
            <?php }?>
        </div>
    </header>

    <?php  echo $contenido; ?>


    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="/nosotros">Nosotros</a>
                <a href="/propiedades">Anuncios</a>
                <a href="/blog">Blog</a>
                <a href="/contacto">Contacto</a>
                

            </nav>
            <p class="copyright">Todos los derechos reservados <?php echo date ("Y"); ?>  &copy;</p>
        </div>

    </footer>
    <script src="/build/js/bundle.min.js"></script>
    
</body>
</html>