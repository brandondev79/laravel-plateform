<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Show the setting dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.settings');
    }
}
