<?php

namespace App\Http\ViewComposers;

use App\Models\SkillsCategory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class ShareDataComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */


    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        if( (Route::getCurrentRoute()->getName() == 'showUserResume') ||
            (Route::getCurrentRoute()->getName() == 'showUserResume2') ||
            (Route::getCurrentRoute()->getName() == 'pdfDownload' && request('id'))) {
            $fromOtherView = true;
            $resumeUser = User::find(request('id'));
        } else {
            $resumeUser = Auth::user();
        }

        $skillsCategories = SkillsCategory::orderBy('title')->with('skills')->get();

        $userSkills = $resumeUser->skills->pluck('id')->toArray();

        $resumeSkills = DB::table('skills')->
        select('skills_categories.title as category',  DB::raw('GROUP_CONCAT(skills.title ORDER BY skills.title SEPARATOR ", ") as skill'))->
        leftJoin('skill_user', 'skills.id', '=', 'skill_user.skill_id')->
        leftJoin('users', 'skill_user.user_id', '=', 'users.id')->
        leftJoin('skills_categories', 'skills_categories.id', '=', 'skills.category_id')->
        where('user_id', '=', $resumeUser->id)->
        groupBy('category')->get();

        $userMissions = $resumeUser->missions()->orderBy('period_start', 'DESC')->orderBy('id', 'DESC')->get();
        $userFormations = $resumeUser->formations()->orderBy('year', 'DESC')->orderBy('id', 'DESC')->get();

        $formationTypes = [1 => 'Certification', 2 => 'Formation'];

        $view->with(compact(['skillsCategories', 'userSkills', 'resumeSkills', 'userMissions', 'userFormations', 'formationTypes', 'resumeUser', 'fromOtherView']));
    }
}
