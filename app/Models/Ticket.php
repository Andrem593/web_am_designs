<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    protected $fillable = ['user_id', 'fecha', 'prioridad', 'usuario_asignado', 'empresa_id', 'descripcion', 'estado', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
