<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;

    //Nome da tabela
    protected $table = "users";

    //Campos da tabela
    protected $fillable = ['name', 'email', 'password'];
}
