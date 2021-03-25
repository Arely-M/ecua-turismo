<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permiso_rol extends Model
{
    protected $table = 'permiso_rol';
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
