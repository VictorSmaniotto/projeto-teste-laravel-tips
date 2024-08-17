<?php

namespace App\Models;

use App\Enums\SignatureStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Signature extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'client_id',
        'plan_id',
        'status'
    ] ;

    protected $casts = [
        'status' => SignatureStatus::class
    ];

    public function client(){
        // 1 assinatura pertence a 1 cliente
        return $this->belongsTo(Client::class);
    }

    public function plan(){
        // 1 assinatura possui 1 plano
        return $this->belongsTo(Plan::class);
    }

    public function transactions(){
        // 1 assinatura pode estar em muitas transações
        return $this->hasMany(Transaction::class);
    }

    public function signatureHistories(){
        // 1 assinatura pode ter varios historicos
        return $this->hasMany(SignatureHistory::class);
    }
}
