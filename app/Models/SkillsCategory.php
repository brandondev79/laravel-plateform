<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsCategory extends Model
{

    protected $fillable = ['title'];

    public function skills() {
        return $this->hasMany('App\Models\Skill', 'category_id')->orderBy('title');
    }
}
