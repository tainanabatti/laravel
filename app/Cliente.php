<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome','telefone','rua','complemento','bairro', 'cep','cidade', 'estado' ];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'clientes';
}
