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

    $this->addRoute(['GET', 'HEAD'], $ruta, $controlador, $nombre);
    return $this;

  }

  public function addPost($ruta, $controlador, $nombre = ''){

    $this->addRoute(['POST'], $ruta, $controlador, $nombre);
    return $this;

  }

  public function addDel($ruta, $controlador, $nombre = ''){

    $this->addRoute(['DELETE'], $ruta, $controlador, $nombre);
    return $this;

  }

  public function addPut($ruta, $controlador, $nombre = ''){

    $this->addRoute(['PUT', 'PATCH'], $ruta, $controlador, $nombre);
    return $this;

  }

}
