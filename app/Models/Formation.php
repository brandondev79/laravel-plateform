<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = ['type', 'year', 'facility_name', 'formation_name'];

    public function user() {
        return $this->belongsTo('\App\Models\User');
    }

}
