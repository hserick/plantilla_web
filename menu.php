<?php

//Dirección del servidor
//$servidor = 'url';
$servidor = 'http://10.64.10.7/plantilla_web/materialize/';

include_once './cabecera.php';
// Barra de menú que recibe como parámetro el link activo
?>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li id="el_0">
                    <a href="<?php echo $servidor; ?>/index.php?dest=0">
                        Inicio
                    </a>
                </li>
                <li id="el_1">
                    <a href="<?php echo $servidor; ?>/index.php?orig=<?php echo $orig; ?>&dest=1">
                        Pagina 1
                    </a>
                </li>
                <li id="el_2">
                    <a href="<?php echo $servidor; ?>/index.php?orig=<?php echo $orig; ?>&dest=2">
                        Pagina 2
                    </a>
                </li>
      </ul>
    </div>
  </nav>
        