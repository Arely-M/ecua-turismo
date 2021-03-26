<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol_permiso extends Model
{
    protected $table = 'rol_permiso';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'id_permiso',
        'id_rol', 
    ];
    protected $guarded = [];
    use HasFactory;
}
