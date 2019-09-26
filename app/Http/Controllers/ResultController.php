<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Result;
use App\Survey;
use Session;

class ResultController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function submitresult(Request $request){
        $creator = Auth::user()->id;
        $question_id0 = $request['question_id1'];
        $question_id1= $request['question_id2'];
        $question_id2 = $request['question_id3'];
        $question_id3 = $request['question_id4'];
        $question_id4 = $request['question_id5'];
        $survey_id = $request['survey_id'];
        $insertResults0 = Result::insertGetId([
          'survey_id'=>$survey_id,
          'question_id'=>$question_id0,
          'option_id'=>$request['group1'],
          'user_id'=>$creator,
        ]);
        $insertResults1 = Result::insertGetId([
          'survey_id'=>$survey_id,
          'question_id'=>$question_id1,
          'option_id'=>$request['group2'],
          'user_id'=>$creator,
        ]);
        $insertResults2 = Result::insertGetId([
          'survey_id'=>$survey_id,
          'question_id'=>$question_id2,
          'option_id'=>$request['group3'],
          'user_id'=>$creator,
        ]);
        $insertResults3 = Result::insertGetId([
          'survey_id'=>$survey_id,
          'question_id'=>$question_id3,
          'option_id'=>$request['group4'],
          'user_id'=>$creator,
        ]);
        $insertResults4 = Result::insertGetId([
          'survey_id'=>$survey_id,
          'question_id'=>$question_id4,
          'option_id'=>$request['group5'],
          'user_id'=>$creator,
        ]);

      if ($insertResults4) {
        $credits = Auth::user()->credits;
        $credits = $credits + 10;
        User::where('id',Auth::user()->id)->update([
          'credits' => $credits,
        ]);
        Session::flash('success','value');
        return back();
      }
      else {
        Session::flash('error','value');
        return back();

      }
    }


    public function viewReport($id){
      $results = \App\Result::where('survey_id', $id)->get();
      if($results->count() == 0){
        Session::flash('error','value');
        echo "No one response Yet";
        return back();
      }
      else {
      if(Auth::user()->userRole==4){
      $survey = Survey::where('survey_id',$id)->firstOrFail();
      if($survey){
        return view('result.view',compact('survey','results'));
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

  public function viewReportModern($id){
    $results = \App\Result::where('survey_id', $id)->get();
    if($results->count() == 0){
      Session::flash('error','value');
      echo "No one response Yet";
      return back();
    }
    else {
    if(Auth::user()->userRole==4){
    $survey = Survey::where('survey_id',$id)->firstOrFail();
    if($survey){
      return view('result.view2',compact('survey','results'));
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
    public function viewResults(){
      // $reseacher = Auth::user()->id;
      // $survey_researcher = Survey::where('reseacher_id',$reseacher)->firstOrFail();
      // if($survey_researcher){
      //   $survey =  Result::where('question_id', 6)->where('option_id',2)->count();
      //   return view('result.view',compact('survey'));
      // }

      $questions = \App\Question::all();
      return view('result.view',compact('questions'));
    }
}
