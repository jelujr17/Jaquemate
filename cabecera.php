<head>
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);

    $titulo_pagina = '';

    switch ($current_page) {
        case 'index.php':
            $titulo_pagina = 'Inicio';
            break;
        case 'otro_archivo.php':
            $titulo_pagina = 'Título para otro archivo';
            break;
        case 'otro_mas.php':
            $titulo_pagina = 'Título para otro más';
            break;
        default:
            $titulo_pagina = 'Título por defecto';
            break;
    }
    ?>
    <title>
        <?php echo $titulo_pagina; ?>
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cabecera.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    div
</body>
