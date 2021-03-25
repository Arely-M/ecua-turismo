<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincias extends Model
{
    protected $table = 'provincias';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'nombre', 
        'descripcion',  
    ];
    protected $guarded = [];
    use HasFactory;
}
