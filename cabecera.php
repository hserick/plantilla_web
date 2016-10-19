<!DOCTYPE html>
<html>
    <head>
        <!-- La ruta del servidor y conexiones se modifican en menu.php-->
        <?php
        header('Content-Type: text/html; charset=UTF-8');

        //Variables recibidas
        $orig = '';
        $dest = '';
        
        if (empty($_GET)) {
            $dest = 0;
            $orig = 0;
        } else {
            $orig = filter_input(INPUT_GET, 'orig');
            $dest = filter_input(INPUT_GET, 'dest');
        }
        ?>
        <meta charset="UTF-8">
        <title>Conciliación de cheques</title>
        <!--Import materialize.css-->
        <link href="visual/css/materialize.min.css" rel="stylesheet" type="text/css" media="screen,projection"/>
        <!-- Iconos -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="visual/css/personalizado.css" rel="stylesheet" type="text/css"/>
        
        
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
  <body>
        <a style="display: block;" href="#" class="scroll-top hidden-xs hidden-md">Volver Arriba</a>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="visual/img/LOGO_PROFEPA.png" alt="Logo PROFEPA"/>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content blue lighten-2 white-text text-darken-3">
                                <h3>Conciliación de cheques</h3>
                                <div class="divider"></div>
                                <div class="flow-text">Reporte de cheques creados en el periodo especificado</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>