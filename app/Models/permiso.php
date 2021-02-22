<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{
    protected $table = 'permiso';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'nombre_permiso', 
        'ruta_permiso',  
        'estado_permiso',    
    ];
    protected $guarded = [];
    use HasFactory;
}
