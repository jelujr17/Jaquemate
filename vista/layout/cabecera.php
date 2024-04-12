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
    case 'potenciar.php':
      $titulo_pagina = 'Potenciamos tu Marca';
      break;
    default:
      $titulo_pagina = 'Título por defecto';
      break;
  }
  $current_page = basename($_SERVER['PHP_SELF']); ?>
  <title> <?php echo $titulo_pagina; ?> </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="vista/css/cabecera.css">
  <link rel="stylesheet" href="vista/css/footer.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="icon" href="vista/assets/icono.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" href="vista/css/practicaconnosotros.css">
</head>

<body>
  <nav class="containerCabecera" <?php echo ($current_page === 'index.php' || $current_page === 'realidadvirtual.php' ? 'oculto' : ''); ?>>
    <ul>
      <li class="imag"><a href="https://jaquemate.es"><img src="vista/assets/icono.png" alt="Logo"></a></li>
      <li><a href="Potenciamos-tu-Marca">Potenciamos tu marca</a></li>
      <li><a href="Realidad-Virtual">Realidad Virtual</a></li>
      <li><a href="Soluciones">Soluciones</a></li>
      <li><a href="Contacto">Contacto</a></li>
    </ul>
  </nav>


  </div>