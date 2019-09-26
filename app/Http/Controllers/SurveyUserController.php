<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use Auth;
use App\Question;

class SurveyUserController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function userSurvey(){
      $allSurvey= Survey::where('department',Auth::user()->department)->orderby('survey_id','DESC')->get();
      if($allSurvey){
      return view('user.survey',compact('allSurvey'));
    }
    }


    public function viewSurvey($id){
      if(Auth::user()->userRole >4){
      $survey = Survey::where('survey_id',$id)->firstOrFail();
      if($survey){
        return view('user.view',compact('survey'));
      }
      else{
        return back();
      }
    }
    else{
      return back();
    }
    }
}
