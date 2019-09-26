<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Carbon\Carbon;
use App\Survey;
use App\Question;
use App\QuestionOption;
use App\Result;
use Session;


class ProfileController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $profile = Auth::user();
      return view('profile.view')->with(['data' => $profile]);
    }
    public function edit(){
      if(Auth::user()->userRole >= 2){
      $profile = Auth::user();
      return view('profile.edit')->with(['user' => $profile]);
    }
    else {
      return back();
    }
    }

    public function update(Request $request) {
      $user = Auth::user();
      $this->validate($request, [
          'name' => 'required|max:255',
          'depart' => 'required|max:255,'.$user->id,
      ]);
      $update = User::where('id',Auth::user()->id)->update([
        'name'=>$request['name'],
        'department'=>$request['depart'],
        'semester'=>$request['semester'],
        'userRole'=>$request['utype'],
        'created_at'=>Carbon::now()->toDateTimeString(),
      ]);
      if($update){
        return back();
      }
      else {
        return back();
      }
    }

    public function survey(){
      if(Auth::user()->userRole == 4){
      $allSurvey = Survey::Where('reseacher_id',Auth::user()->id)->get();
      return view('profile.survey',compact('allSurvey'));
      }
      else{
        return back();
      }
    }

    public function deleteSurve($id){
      $questions = \App\Question::where('survey_id',$id)->get();
      $servey = Survey::where('survey_id',$id)->delete();
      $allquestion = Question::where('survey_id',$id)->delete();
      foreach($questions as $question){
        QuestionOption::where('question_id',$question->question_id)->delete();
      }
      $result = Result::where('survey_id',$id)->delete();
      if($questions){
        if($servey){
          if ($allquestion) {
            Session::flash('delete_success','value');
            return back();
          }
        }
      }
    }
  }
