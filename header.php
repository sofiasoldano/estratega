<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estratega</title>

    <!-- Style -->
      
    <link href="css/vendors/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendors/flexslider.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
      
  </head>

  <body class="page-<?php echo $page_name; ?>">

    <header>
        <div class="logo">
            <a href="page-home.php">
                <img src="img/logo.png" alt="Estratega" width="246" class="img-responsive"> 
            </a>
        </div>
        <div class="icon-menu visible-xs">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="seccions-nav">
            <div class="close-menu visible-xs">
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul>
                <li>
                    <a class="<?php if ( $page_name == 'quienes') echo 'active'; ?>" href="page-quienes.php">Quienes somos</a>
                </li>
                <li>
                    <a class="<?php if ( $page_name == 'que') echo 'active'; ?>" href="page-que.php">¿Qué hacemos?</a>
                </li>
                <li>
                    <a class="<?php if ( $page_name == 'como') echo 'active'; ?>" href="page-como.php">¿Cómo lo hacemos?</a>
                </li>
                <li>
                    <a class="<?php if ( $page_name == 'reconocimiento') echo 'active'; ?>" href="page-reconocimiento.php">Reconocimiento</a>
                </li>
                <li>
                    <a class="<?php if ( $page_name == 'ondemand') echo 'active'; ?>" href="page-on-demand.php">Estratega on demand</a>
                </li>
                 <li>
                    <a class="<?php if ( $page_name == 'contacto') echo 'active'; ?>" href="page-contacto.php">Contáctenos</a>
                </li>
                <li class="info-container">
                    <a class="info" href="#">Info</a>
                    <div class="info-dropdown">
                        <iframe class="video" width="390" height="220" src="https://www.youtube.com/embed/6DEeNXb2u1I" frameborder="0" allowfullscreen></iframe>
                        <div class="novedades">Novedades</div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <main>