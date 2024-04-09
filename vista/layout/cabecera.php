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
  <!--<link rel="stylesheet" href="vista/css/cabecera.css">
  <link rel="stylesheet" href="vista/css/realidadvirtual.css">
  <link rel="stylesheet" href="vista/css/soluciones.css">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="vista/assets/icono.png" type="image/png"> <!-- Especifica la ruta de tu ícono y su tipo -->
    <!--<script src="vista/js/modo.js"></script>-->

  </head>

<body>
<nav class="containerCabecera"<?php echo ($current_page === 'index.php' || $current_page === 'realidadvirtual.php' ? 'oculto': ''); ?>>
    <ul>
      <li class="imag"><a href="#"><img src="vista/assets/icono.png" alt="Logo"></a></li>
      <li><a href="potenciar.php">Potenciamos tu marca</a></li>
      <li><a href="realidadvirtual.php">Realidad Virtual</a></li>
      <li><a href="soluciones.php">Soluciones</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
  </nav>

  
  </div>

