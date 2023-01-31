<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $primaryKey = "idUsuario";
    protected $fillable = ["nombres", "codigo", "contraseña", "DNI", "tipoUsuario"];
    public $timestamps = false;
    protected $table = "usuario";
}
