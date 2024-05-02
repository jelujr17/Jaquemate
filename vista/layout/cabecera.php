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
    case 'practicaConNosotros.php':
      $titulo_pagina = 'Practica con Nosotros';
      break;
    case 'avisolegal.php':
      $titulo_pagina = 'Aviso Legal';
      break;
    case 'politicadeprivacidad.php':
      $titulo_pagina = 'Politica de Privacidad';
      break;
    case 'quienesSomos.php':
      $titulo_pagina = 'Quienes Somos';
      echo '<link rel="stylesheet" href="vista/css/quienesSomos.css">';
      break;
    case 'potenciar.php':
      $titulo_pagina = 'Potenciamos tu marca';
      break;
    default:
      $titulo_pagina = 'Pagina no encontrada';
      break;
  }
  $current_page = basename($_SERVER['PHP_SELF']); ?>

  <title> <?php echo $titulo_pagina; ?> </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="vista/css/cabecera.css">
  <link rel="stylesheet" href="vista/css/footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="icon" href="vista/assets/icono.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
 <nav id="cabecera" class="containerCabecera">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <li class="fas fa-bars"></li>
    </label>
    <a href="index.php" class="enlace">
      <img src="vista/assets/icono.png" alt="" class="logo m-1">
    </a>
    
    <ul class="primary">
    <li><a href="index.php">Inicio</a></li>
      <li><a href="index.php#potenciar">Potenciamos tu marca</a></li>
      <li><a href="realidadvirtual.php">Realidad Virtual</a></li>
      <li><a href="index.php#solucionar">Soluciones</a></li>
      <li><a href="https://store.jaquemate.es/">Venta Online</a></li>
      <li><a href="index.php#contactar">Contacto</a></li>
    </ul>
  </nav>
	

