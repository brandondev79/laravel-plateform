<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $guarded = [];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $userTypes = [
        1 => 'employee',
        2 => 'sale',
        3 => 'admin',
        4 => 'company'
    ];

    public function skills() {
        return $this->belongsToMany('App\Models\Skill');
    }

    public function missions() {
        return $this->hasMany('\App\Models\Mission');
    }

    public function formations() {
        return $this->hasMany('\App\Models\Formation');
    }

    public function role() {
        return $this->userTypes[$this->type];
    }

    public function lastMissionEnds() {
       $t = $this->missions()->orderBy('period_end', 'desc')->limit(1)->get()->pluck('period_end');
       return isset($t[0]) ? $t[0] : false;
    }

    public function circleColor() {
        if(!$this->on_mission) {
            return 'green';
        } else {
            $lastMisionEnd = Carbon::parse($this->lastMissionEnds());
            if($lastMisionEnd) {
                $now = Carbon::now();
                if ($now->greaterThan($lastMisionEnd)) {
                    return 'yellow';
                } else {
                    $diff_in_months = $lastMisionEnd->diffInMonths($now);

                    return $diff_in_months <= 3 ? 'yellow' : 'red';
                }
            } else {
                return 'yellow';
            }
        }
    }
}
