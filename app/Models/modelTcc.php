<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelTcc extends Model
{
    use HasFactory;
    protected $table="tbfaleconosco";
    protected $fillable = ['nomeFaleConosco','emailFaleConosco','assuntoFaleConosco','mensagemFaleConosco'];
    public $timestamps = false;
}
