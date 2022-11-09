<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['category_id', 'title'];

    public function category() {
        return $this->belongsTo('App\Models\SkillsCategory');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}
