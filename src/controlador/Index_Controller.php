<?php



use Leandro\app\libs\Controlador;

class Index_Controller extends Controlador
{
  public function index()
  {
    //echo "con index m index ";
    $this->cargarVista("index/index", "dato demo");
  }
}
