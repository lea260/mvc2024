<?php

namespace Empresa\app\controlador;

require_once 'traduccion/Translate.php';

use \SimpleTranslation\Translate;

//require_once 'config/config.php';

/*manejo de ccookies */
//var_dump(constant('URL'));




class Controlador
{
  public $datos;
  public function __construct()
  {
  }

  function cargarVista($vistaRuta, $datos = null, $ext = "php")
  {
    $this->datos = $datos;
    $ruta = "src/vista/{$vistaRuta}.{$ext}";
    require_once $ruta;
  }
}
