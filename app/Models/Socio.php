<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    // aqui vamor declarar que todos estes campos que estao protegidos de serem editados
    protected $fillable=[
        'user_id', 
        'nome',
        'CC',
        'morada',
        'codigo-postal',
        'localidade',
        'telefone',
    ];

    // vamos fazer a relação entre o user id_ e vai ao model utilizar a tabela user
    //tambem declara que muitos socios tem um so utilizador
    public function  user(){
        return $this ->belongsTo(User::class); 
    }
    // agora é preciso declarar a ligação no model users
}
