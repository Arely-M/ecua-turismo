<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'nombre_rol',
        'estado_rol',   
    ];
    protected $guarded = [];
    use HasFactory;
}
