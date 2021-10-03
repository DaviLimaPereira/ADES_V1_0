<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agremiacao extends Model
{
    use HasFactory;

    protected $fillable = ['nome','nomecompleto','fundacao','descricao'];
}
