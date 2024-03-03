<?php

use Empresa\app\modelo\Persona;
use Empresa\app\libs\Controlador;

class Persona_Controller extends Controlador
{

  public function listar()
  {
    $lista = Persona::listar();
    $this->cargarVista("persona/listar", $lista);
  }
}
