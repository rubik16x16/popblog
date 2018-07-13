<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model{

  protected $table= 'entradas';
  protected $fillable= ['titulo', 'descripcion'];

  public $timestamps= false;

}
