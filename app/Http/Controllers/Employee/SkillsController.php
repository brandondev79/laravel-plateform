<?php

namespace App\Http\Controllers\Employee;

use App\Models\Skill;
use App\Models\SkillsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SkillsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $badgeColors = ['lime', 'orchid', 'azure', 'gold'];
        return view('employee.skills', compact(['badgeColors']));
    }

    public function update(){
        if(request('skill_ids')) {
            $skills = explode(',', request('skill_ids'));
            Auth::user()->skills()->detach();
            if (is_array($skills)) {
                Auth::user()->skills()->attach($skills);
            }
        }
        session()->flash('message', 'Vos compétences mises à jour avec succès!');
        return back();
    }

    public function attachSkill($id) {
        if(request()->route('id')) {
            Auth::user()->skills()->attach($id);
        }
    }

    public function detachSkill($id) {
        if(request()->route('id')) {
            Auth::user()->skills()->detach($id);
        }
    }

    public function clear() {
        Auth::user()->skills()->detach();
        return back();
    }

    public function search() {
        $userSkills = Auth::user()->skills->pluck('id')->toArray();

        $keyword = request('keyword');
        $skills = Skill::with('category')->where('title', 'LIKE', "%$keyword%")->
        limit(10)->orderBy('title')->get()->map(function ($s) use($userSkills) {
            in_array($s->id, $userSkills) ? $s->checked = true : $s->checked = false;
            return $s;
        });
        return $skills;
    }

    public function add() {
        $cat = request('category');
        $newCatName = request('newCatName');
        $skillName = request('skillName');

        if(intval($cat)) {
            SkillsCategory::find($cat)->skills()->create(['title' => $skillName]);
        } else {
            $newCat = SkillsCategory::create(['title' => $newCatName]);
            Skill::create(['category_id' =>$newCat->id, 'title' => $skillName]);
        }

        session()->flash('message', 'Nouvelle compétence créée avec succès!');

        return back();
    }
}
