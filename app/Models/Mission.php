<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $fillable = ['customer', 'period_start', 'period_end', 'position', 'description', 'environment'];

    public function user() {
        return $this->belongsTo('\App\Models\User');
    }
}
