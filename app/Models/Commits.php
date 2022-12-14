<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commits extends Model
{
    use HasFactory;
    protected $table = 'commits';
    protected $fillable = ['id','chave','loginUser','repositorio','mensagem','data_commit'];
}
