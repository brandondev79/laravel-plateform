<?php

namespace App\Http\Controllers\Employee;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class FormationsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('employee.formations');
    }

    public function store() {

        Auth::user()->formations()->create(request(['type', 'facility_name', 'formation_name', 'year']));

        session()->flash('message', 'Formation ajoutée avec succès!');

        return back();
    }

    public function delete($id) {
        $formation = Auth::user()->formations()->find($id);

        if($formation) {
            $formation->delete();
        }

        session()->flash('message', 'Formation supprimée avec succès!');

        return back();
    }

    public function edit(Formation $form) {
        return view('employee.formations', ['edit' => true, 'form' => $form]);
    }


    public function update(Formation $formation) {
        $formation->update(request()->all());

        session()->flash('message', 'Formation mise à jour avec succès!');
        return redirect( Auth::user()->role() . '/formations');
    }

}
