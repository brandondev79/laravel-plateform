<?php

namespace App\Http\Controllers\Employee;

use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class MissionsController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('employee.missions');
    }

    public function store() {

        Auth::user()->missions()->create(request(['customer', 'period_start', 'period_end', 'position', 'description', 'environment']));

        session()->flash('message', 'Mission ajoutée avec succès!');

        return back();
    }

    public function delete($id) {
        $mission = Auth::user()->missions()->find($id);

        if($mission) {
            $mission->delete();
        }
        session()->flash('message', 'Mission supprimée avec succès!');
        return back();
    }

    public function edit(Mission $miss) {
        return view('employee.missions', ['edit' => true, 'miss' => $miss]);
    }


    public function update(Mission $mission) {
        $mission->update(request()->all());

        session()->flash('message', 'Mission mise à jour avec succès!');
        return redirect( Auth::user()->role() . '/missions');
    }

}
