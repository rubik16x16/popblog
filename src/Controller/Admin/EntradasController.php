<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Models\Entrada;

class EntradasController extends Controller{

  public function index(){

    return $this->render('admin/entradas/index.html.twig', ['entradas' => Entrada::all()]);

  }

  public function create(){

    return $this->render('admin/entradas/create.html.twig');

  }

  public function store(Request $request){

    $entrada= new Entrada($request->request->all());
    $entrada->save();

    return $this->redirectToRoute('admin.entradas.index');

  }

  public function edit($id){

    return $this->render('admin/entradas/edit.html.twig', [
      'entrada' => Entrada::find($id)
    ]);

  }

  public function update(Request $request, $id){

    $entrada= Entrada::find($id);
    $entrada->fill($request->request->all());
    $entrada->save();

    return $this->redirectToRoute('admin.entradas.index');

  }

  public function show($id){

    return new Response('show ' . $id);

  }

  public function destroy($id){

    $entrada= Entrada::find($id);
    $entrada->delete();

    return new Response('destroy ' . $id);

  }

}
