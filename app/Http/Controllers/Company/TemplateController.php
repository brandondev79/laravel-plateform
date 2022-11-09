<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    /**
     * Show the template dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.templates');
    }
}
