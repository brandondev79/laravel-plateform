<?php

namespace App\Http\Controllers\Company;

use App\Models\Settings;
use App\Models\Skill;
use App\Models\SkillsCategory;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class HomeController extends Controller
{

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();
        return view('company.home', compact(['users']));
    }

    public function addUser() {

        request()->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'unique:users,email',
            // 'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => request('name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'password' => bcrypt('1234'),
            'type' => request('type'),
            'phone' => request('phone'),
        ]);

        $this->sendResetLink(request('email'));

        session()->flash('message', 'Utilisateur créé avec succès!');
        return back();
    }

    public function deleteUser(User $user) {

        if(Auth::user()->role() == 'admin') {
            $user->delete();
        }
        session()->flash('message', 'Utilisateur supprimé avec succès!');
        return back();
    }

    public function changeTemplate($id) {
        if(intval($id) > 0 && intval($id) <= 4) {
            Settings::first()->update([
                'template' => $id
            ]);
        }

        session()->flash('message', 'le modèle a été modifié avec succès');

        return back();
    }

    public function showUserResume() {
        $resumePopupVisible = true;
        $users = User::latest()->get();
        return view('company.home', compact('users', 'resumePopupVisible'));
    }

    private function sendResetLink($email) {
        $req = new \Illuminate\Http\Request();
        $req->replace(['email' => $email]);
        $this->sendResetLinkEmail($req);
    }

    public function skills() {
        $skill_categories = SkillsCategory::with('skills')->orderBy('title')->get();
        return view('company.skills', compact('skill_categories'));
    }

    public function skillAdd() {
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

    public function deleteSkillsCat(SkillsCategory $cat) {
        $cat->skills()->delete();
        $cat->delete();
        session()->flash('message', 'Catégorie de compétences et toutes ses compétences supprimées!');
        return back();
    }

    public function deleteSkill(Skill $skill) {
        $skill->delete();
        session()->flash('message', 'Compétence supprimée!');
        return back();
    }

   public function editSkillsCat(SkillsCategory $cat) {
        return view('company.skills-edit', compact(['cat']));
    }

    public function updateSkillsCat(SkillsCategory $cat) {
        request()->validate([
            'title' => 'required|unique:skills_categories|max:150|min:2'
        ]);

        $cat->title = request('title');
        $cat->save();
        session()->flash('message', 'Catégorie mise à jour avec succès');
        return back();
    }

    public function editSkill(Skill $skill) {
        return view('company.skills-edit', compact(['skill']));
    }

   public function updateSkill(Skill $skill) {
       request()->validate([
           'title' => 'required|unique:skills|max:150|min:2'
       ]);

       $skill->title = request('title');
       $skill->save();
       session()->flash('message', 'Compétence mise à jour avec succès');
       return back();
    }
}
