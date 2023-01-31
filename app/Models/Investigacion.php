<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigacion extends Model
{
    use HasFactory;
    protected $primaryKey = "idInvestigacion";
    protected $fillable = ["titulo", "autor", "descripcion", "url"];
    public $timestamps = false;
    protected $table = "investigacion";
}
