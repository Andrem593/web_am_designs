<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    public $table = 'empresas';

    protected $fillable = [
        'nombre',
        'contacto',
        'representante',
        'telefono',
        'email',
        'logo',
        'estado'
    ];
}
