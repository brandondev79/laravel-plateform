<?php

namespace App\Http\Controllers\Sale;

use App\Models\Settings;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
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
        $users = User::where('type', 1)->latest()->get();

        $a = User::first();

        $badgeColors = ['lime', 'lemon', 'pastel'];

        return view('sale.home', compact(['users', 'badgeColors']));
    }

    public function showUserResume() {
        $resumePopupVisible = true;
        $users = User::where('type', 1)->latest()->get();
        return view('sale.home', compact('users', 'resumePopupVisible'));
    }
}
