<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    public $fillable = ['id', 'nomeUsuario', 'senhaUsuario', 'emailUsuario', 'dataNascUsuario', 'generoUsuario', 'fotoUsuario', 'alturaUsuario', 'pesoUsuario'];

    //public $timestamps = false;
}
