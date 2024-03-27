<html>
<head>
  <?php
  $current_page = basename($_SERVER['PHP_SELF']);

  $titulo_pagina = '';

  switch ($current_page) {
    case 'index.php':
      $titulo_pagina = 'Inicio';
      break;
    case 'contacto.php':
      $titulo_pagina = 'Contacto';
      break;
    case 'soluciones.php':
      $titulo_pagina = 'Soluciones';
      break;
      case 'realidadvirtual.php':
        $titulo_pagina = 'Realidad Virtual';
        break;
    default:
      $titulo_pagina = 'Título por defecto';
      break;
  }
  $current_page = basename($_SERVER['PHP_SELF']);  ?>
  <title> <?php echo $titulo_pagina; ?> </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="vista/css/cabecera.css">
  <link rel="stylesheet" href="vista/css/cabecera.css">
  <link rel="stylesheet" href="vista/css/realidadvirtual.css">
  <link rel="stylesheet" href="vista/css/soluciones.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="vista/assets/icono.png" type="image/png"> <!-- Especifica la ruta de tu ícono y su tipo -->
    <!--<script src="vista/js/modo.js"></script>-->

  </head>

<body>
  <div class="containerCabecera <?php echo ($current_page === 'index.php' ? 'oculto': ''); ?>">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none m-3">
        <img src="vista/assets/icono.png" alt="Logo" width="65" height="50" id="logo">
      </a>
      
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <div class="<?php echo ($current_page === 'index.php' ? 'menu': ''); ?>">
            <li><a href="index.php" class="nav-link px-2 text-white">indice</a></li>
          </div>
          <div class="<?php echo ($current_page === 'potenciar.php' ? 'menu': ''); ?>">
            <li><a href="potenciar.php" class="nav-link px-2 text-white">Potenciamos tu marca</a></li>
          </div>
          <div class="<?php echo ($current_page === 'realidadvirtual.php' ? 'menu': ''); ?>">
            <li><a href="realidadvirtual.php" class="nav-link px-2 text-white">Realidad Virtual</a></li>
          </div>
          <div class="<?php echo ($current_page === 'soluciones.php' ? 'menu': ''); ?>">
            <li><a href="soluciones.php" class="nav-link px-2 text-white">Soluciones</a></li>
          </div>
          <div class="<?php echo ($current_page === 'contacto.php' ? 'menu': ''); ?>">
            <li><a href="contacto.php" class="nav-link px-2 text-white">Contacto</a></li>
          </div>
        </ul>

    </div>
  </div>

