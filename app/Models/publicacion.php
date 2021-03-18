<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    protected $table = 'publicacion';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'titulo', 
        'ubicacion',
        'descripcion',  
        'imagen', 
    ];
    protected $guarded = [];
    use HasFactory;
}
