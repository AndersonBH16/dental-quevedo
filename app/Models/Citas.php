<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    protected $table = 'citas';
    protected $fillable = ['titulo', 'descripcion', 'fecha', 'start', 'end', 'minutos', 'paciente', 'estado'];

//    static $rules = [
//        'titulo' => 'required',
//        'descripcion' => 'required',
//        'inicio' => 'required',
//        'fin' => 'required',
//        'paciente' => 'required'
//    ];

}
