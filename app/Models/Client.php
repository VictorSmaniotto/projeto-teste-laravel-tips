<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    // Todos os campos que serão salvos no banco
    protected $fillable = [
        "user_id",
        "document",
        "birthdate"
    ];

    // Todos os campos que vão entrar com um padrão específico
    protected $casts = [
        "birthdate" => "datetime"
    ];

    public function user(){
        // 1 cliente pertence a 1 usuário
        return $this->belongsTo(User::class);
    }

    public function signatures(){
        // 1 cliente possui varias assinaturas
        return $this->hasMany(Signature::class);
    }
}
