<?php

namespace App\Http\Controllers\Employee;

use Carbon\Carbon;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Image;

class UsersController extends Controller
{
    public function update(User $user) {

       $data = [
           // 'name' => request('first_name'),
           // 'last_name' => request('last_name'),
           'address' => request('address'),
           'postal_code' => request('postal_code'),
           'city' => request('city'),
           // 'birthday' => is_null(request('birthday')) ? null : Carbon::parse(request('birthday'))->format('Y-m-d'),
           // 'post' => request('post'),
           // 'seniority' => is_null(request('seniority')) ? null : Carbon::parse(request('seniority'))->format('Y-m-d'),
           // 'phone' => request('phone'),
           'cellphone' => request('cellphone'),
           'year_of_experience' => request('year_of_experience'),
           'english' => request('english'),
           'other_language' => request('other_language'),
           'on_mission' => request('on_mission'),
           'comments' => request('comments'),
           'email' => request('email'),
       ];


      $user->update($data);
    

      if(request()->file('thumb')) {
         $random_name =  Auth::user()->id . uniqid() . '.jpg';

      request()->validate([
          'thumb' => 'image|mimes:jpeg,png,jpg,gif'
      ]);
      //Image::configure(array('driver' => 'imagick'));
        $img = Image::make(request()->file('thumb'))->resize(45, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save('img/' . $random_name);

          Auth::user()->update(['image_name' => $random_name]);

          return back()->with('thumbcrop', true);
      }

      Session::flash('message', 'Détails de l\'utilisateur mis à jour avec succès!');

      return back();

    }

    function crop($x, $y, $with, $height){
        //Image::configure(array('driver' => 'imagick'));
        $random_name =  Auth::user()->id . uniqid() . '.jpg';
        $img_url = public_path('img/');
        $img = Image::make($img_url . Auth::user()->image_name)->crop($with, $height, $x, $y)->resize(45, 45)->save($img_url . $random_name);
        Auth::user()->update(['image_name' => $random_name]);
        Session::flash('message', 'Détails de l\'utilisateur mis à jour avec succès!');
        return redirect('/' . Auth::user()->role());
    }
}
