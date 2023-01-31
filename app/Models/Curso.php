<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $primaryKey = "idCurso";
    protected $fillable = ["nombre", "creditos","ciclo"];
    public $timestamps = false;
    protected $table = "cursos";
}
