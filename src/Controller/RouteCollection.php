<?php

namespace App\Controller;

use Symfony\Component\Routing\Route;

class RouteCollection extends \Symfony\Component\Routing\RouteCollection{

  private function addRoute($metodos, $ruta, $controlador, $nombre){

    $nombre= (empty($nombre)) ? $ruta : $nombre;
    $controlador= explode('@', $controlador);
    $controlador[0]= 'App\Controller\\' . $controlador[0];

    $this->add($nombre, new Route($ruta, [
      '_controller' => [$controlador[0] , $controlador[1]]
    ], [], [], '', [], $metodos));

  }

  public function addGet($ruta, $controlador, $nombre = ''){

    $this->addRoute(['GET'], $ruta, $controlador, $nombre);
    return $this;

  }

  public function addPost(){

    $this->addRoute(['POST'], $ruta, $controlador, $nombre);
    return $this;

  }

  public function addDel(){

    $this->addRoute(['DELETE'], $ruta, $controlador, $nombre);
    return $this;

  }

  public function addPut(){

    $this->addRoute(['PUT', 'PATCH'], $ruta, $controlador, $nombre);
    return $this;

  }

}
