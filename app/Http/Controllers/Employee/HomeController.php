<?php

namespace App\Http\Controllers\Employee;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public $englishOptions = [
        1 => ['val' => 1, 'title' => 'Débutant'],
        2 => ['val' => 2, 'title' => 'Opérationnel'],
        3 => ['val' => 3, 'title' => 'Bilingue']
    ];

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
        $user = Auth::user();
        $date = Carbon::now();
        $badgeColors = ['lime', 'lemon', 'pastel'];
        return view(
            'employee.home',
            [
                'user' => $user,
                'badgeColors' => $badgeColors,
                'englishOptions' => $this->englishOptions,
                'date' => $date
            ]
        );
    }
}
