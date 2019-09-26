<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Survey;
use App\Question;
use App\QuestionOption;
use App\User;
use Session;

class SurveyController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function add(){
      if(Auth::user()->credits >90){
      if(Auth::user()->userRole ==4){
        return view('survey.add');
      }
      else {
        if(Auth::user()->userRole ==1){
          Session::flash('error','value');
          return view('home');
        }
        else if(Auth::user()->userRole == 5){
          Session::flash('error','value');
          return view('home');
        }
        else{
          return redirect('/home');
        }
      }
    }
    else{
      Session::flash('error_money','value');
      return redirect('/home');
    }
    }

    public function insertSurvey(Request $request){
      if(Auth::user()->credits >90){
      $creator = Auth::user()->id;
      $insertSurvey = Survey::insertGetId([
        'title'=>$request['survey'],
        'reseacher_id'=>$creator,
        'department' =>$request['depart'],
      ]);
      // Question 1 insert Query
      $insertQuestion1 = Question::insertGetId([
        'question_title'=>$request['question1'],
        'survey_id'=>$insertSurvey,
      ]);

      $insertQuesOption = QuestionOption::insert([
        ['title'=>$request['qOp1'],
        'question_id'=>$insertQuestion1,],

        ['title'=>$request['qOp2'],
        'question_id'=>$insertQuestion1,],

        ['title'=>$request['qOp3'],
        'question_id'=>$insertQuestion1,],

        ['title'=>$request['qOp4'],
        'question_id'=>$insertQuestion1,],

        ['title'=>$request['qOp5'],
        'question_id'=>$insertQuestion1,],

      ]);
      // Question 2 insert Query
      $insertQuestion2 = Question::insertGetId([
        'question_title'=>$request['question2'],
        'survey_id'=>$insertSurvey,
      ]);

      $insertQuesOption = QuestionOption::insert([

        ['title'=>$request['qOp1'],
        'question_id'=>$insertQuestion2,],

        ['title'=>$request['qOp2'],
        'question_id'=>$insertQuestion2,],

        ['title'=>$request['qOp3'],
        'question_id'=>$insertQuestion2,],

        ['title'=>$request['qOp4'],
        'question_id'=>$insertQuestion2,],

        ['title'=>$request['qOp5'],
        'question_id'=>$insertQuestion2,],
      ]);
      //Question 3 insert Query
      $insertQuestion3 = Question::insertGetId([
        'question_title'=>$request['question3'],
        'survey_id'=>$insertSurvey,
      ]);

      $insertQuesOption = QuestionOption::insert([
        ['title'=>$request['qOp1'],
        'question_id'=>$insertQuestion3,],

        ['title'=>$request['qOp2'],
        'question_id'=>$insertQuestion3,],

        ['title'=>$request['qOp3'],
        'question_id'=>$insertQuestion3,],

        ['title'=>$request['qOp4'],
        'question_id'=>$insertQuestion3,],

        ['title'=>$request['qOp5'],
        'question_id'=>$insertQuestion3,],
      ]);
      //Question 4 insert Query
      $insertQuestion4 = Question::insertGetId([
        'question_title'=>$request['question4'],
        'survey_id'=>$insertSurvey,
      ]);

      $insertQuesOption = QuestionOption::insert([

        ['title'=>$request['qOp1'],
        'question_id'=>$insertQuestion4,],

        ['title'=>$request['qOp2'],
        'question_id'=>$insertQuestion4,],

        ['title'=>$request['qOp3'],
        'question_id'=>$insertQuestion4,],

        ['title'=>$request['qOp4'],
        'question_id'=>$insertQuestion4,],

        ['title'=>$request['qOp5'],
        'question_id'=>$insertQuestion4,],
      ]);
      //Question 5 insert Query
      $insertQuestion5 = Question::insertGetId([
        'question_title'=>$request['question5'],
        'survey_id'=>$insertSurvey,
      ]);

      $insertQuesOption = QuestionOption::insert([

        ['title'=>$request['qOp1'],
        'question_id'=>$insertQuestion5,],

        ['title'=>$request['qOp2'],
        'question_id'=>$insertQuestion5,],

        ['title'=>$request['qOp3'],
        'question_id'=>$insertQuestion5,],

        ['title'=>$request['qOp4'],
        'question_id'=>$insertQuestion5,],

        ['title'=>$request['qOp5'],
        'question_id'=>$insertQuestion5,],
      ]);



      if($insertSurvey){
        $credits = Auth::user()->credits;
        $credits = $credits - 90;
        User::where('id',Auth::user()->id)->update([
          'credits' => $credits,
        ]);
        Session::flash('success','value');
        return redirect('survey/view/'.$insertSurvey);

      }
      else {
        Session::flash('error_query','value');
        return redirect('survey/add');
      }
    }
    else{
      Session::flash('error','value');
      return back();
    }
    }
    public function viewSurvey($id){
      if(Auth::user()->userRole==4){
      $survey = Survey::where('survey_id',$id)->firstOrFail();
      if($survey){
        return view('survey.view',compact('survey'));
      }
      else{

        return back();
      }
    }
    else{
      return back();
    }
    }
// All Data and relations
    // public function view(Request $request){
    //   if(Auth::user()->userRole ==4){
    //   // $survey_id = $request['survey_id'];
    //   // $dataQuestion = Question::where('survey_id',1)->orderBy('question_id','ASC')->get();
    //   // $dataSurvey = Survey::where('survey_id',$survey_id)->firstOrFail();
    //   $surveys = \App\Survey::all();
    //   return view('survey.view',compact('surveys'));
    //   }
    // }

}
