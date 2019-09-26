@extends('layouts.admin')
@section('contents')
<div class="card">
    <form class="form" action="{{url('survey/submitresult')}}" method="post">
      @csrf
        <div class="card-header">

            <div class="row">
                <div class="col-md-8">
@foreach($surveys as $survey)
{{$survey}}

<br>
<br>
@php
$questions = \App\Question::where('survey_id', $survey->survey_id)->get();
@endphp
@foreach($questions as $question)
{{$question->question_id}}
{{$question->question_title}}
<br>
@foreach($question->options as $option)
{{$option->option_id}}
{{$option->title}}
<br>
@endforeach
<br>

@endforeach
<br>
@endforeach

                      <h3>Title:</h3>

                </div>
                <div class="col-md-4 text-right">
                    <a href="#" class="btn btn-sm btn-info"><i class="fa fa-th"></i> All Survey</a>
                </div>
            </div>
        </div>
        <div class="card-body">
          {{--@foreach($dataQuestion as $key=>$question)
            <div class="row mb-5">
                <div class="col-md-12">
                    <h4>{{$question->question_id}}. {{$question->question_title}}</h4>
                </div>
                <input type="hidden" name="survey_id" value="{{$question->survey_id}}">
                <input type="hidden" name="question_id{{$key}}" value="{{$question->question_id}}">
                <div class="col-md-12 ml-5">
                  <input type="radio" name="group{{$key}}" value="1"/>
                  <label for="group{{$key}}">Strongly Agree</label>
                  <input type="radio" name="group{{$key}}" value="2" />
                  <label for="group{{$key}}">Agree</label>
                  <input type="radio" name="group{{$key}}" value="3"/>
                  <label for="group{{$key}}">Neutral</label>
                  <input type="radio" name="group{{$key}}" value="4"/>
                  <label for="group{{$key}}">Disagree</label>
                  <input type="radio" name="group{{$key}}" value="5"/>
                  <label for="group{{$key}}">Strongly Disagree</label>
                </div>
            </div>
            @endforeach
            --}}
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-md-8">
                </div>
                <div class="col-md-4 text-right">
                    <input type="submit" class="btn btn-sm btn-info">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
