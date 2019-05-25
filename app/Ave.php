<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ave extends Model
{
    //
    protected $fillable = [
        'ave', 'cantidad', 'lugar_referencia', 'responsable'
    ];
}
