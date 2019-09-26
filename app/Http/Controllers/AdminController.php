<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Survey;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function allReacher(){
      if(Auth::user()->userRole == 1){
        $researcher = User::where('userRole',4)->get();
        return view('admin.researcher',compact('researcher'));
      }
      else {
        echo "You are Not Authorize to visit";
      }

    }
    public function allUser(){
      if(Auth::user()->userRole == 1){
        $user = User::where('userRole',5)->get();
        return view('admin.user',compact('user'));
      }
      else {
        echo "You are Not Authorize to visit";
      }

    }
    public function allAdmin(){
      if(Auth::user()->userRole == 1){
        $admin = User::where('userRole',1)->get();
        return view('admin.admin',compact('admin'));
      }
      else {
        echo "You are Not Authorize to visit";
      }

    }

    public function allSurvey(){
      if(Auth::user()->userRole == 1){
        $survey = Survey::all();
        return view('admin.survey',compact('survey'));
      }
      else {
        echo "You are Not Authorize to visit";
      }

    }
}
