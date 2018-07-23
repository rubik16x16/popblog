<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Models\Entrada;

class AdminController extends Controller{

  public function index(){

    return $this->render('admin/index.html.twig');

  }

}
