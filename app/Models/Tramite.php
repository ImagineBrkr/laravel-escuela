<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;
    protected $primaryKey = "idTramite";
    public $timestamps = false;
    protected $table = "tramites";
}
