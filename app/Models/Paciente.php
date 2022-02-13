<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';
    public $timestamps = false;

    public function odontograms()
    {
        return $this->hasMany(Odontogram::class, 'patient_id', 'idPaciente');
    }
}
