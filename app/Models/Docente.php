<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $primaryKey = "idUsuario";
    protected $fillable = ["idUsuario", "logros"];
    public $timestamps = false;
    protected $table = "docente";
}
