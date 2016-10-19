<?php
include_once './menu.php';

/*Método para definir el origen y el destino al dar click en un item del menú
 *
 * navegar(); quitará la clase active del origen y la colocará en el destino
 * 
 * el Objetivo es hacer un switch para que solo cambie el cuerpo y no toda la página 
 * el switch tomará como parámetro el número de página enviado
 */

//Switch
switch($dest)
{
    case 1:
        include_once './visual/pag/pagina1.php';
        break;
    case 2:
        include_once './visual/pag/pagina2.php';
        break;
    default :
        include_once './visual/pag/inicio.php';
        break;
}

include_once './pie.php';
