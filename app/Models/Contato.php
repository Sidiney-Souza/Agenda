<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

        protected $fillable = [
        'user_id',
        'name',
        'number',
        'endereço',
        'email',
        'foto',
        'date_de_nasc',
        'data_ultimo_acesso',
    ];
    
    
    
    public function user()  {
        return $this->belongsTo(User::class);
    }
 
    public function telefone()  {
        return $this->hasMany(Telefone::class);
    }
    
    
}
