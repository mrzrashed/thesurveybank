@extends('layouts.admin')
@section('contents')
<div class="card">
  <div class="card-header">
      <div class="row">
          <div class="col-md-8">
                <h3>Title:{{$survey->title}}</h3>
          </div>
          <div class="col-md-4 text-right">
              <a href="{{url('profile/survey')}}" class="btn btn-sm btn-info"><i class="fa fa-th"></i> All Survey</a>
          </div>
      </div>
  </div>
  <div class="card-body">
    @php
    $questions = \App\Question::where('survey_id', $survey->survey_id)->get();
    $i=0;
    @endphp
    @foreach($questions as $key=>$question)
      <div class="row mb-5">
          <div class="col-md-12">

              <h4>{{++$key}}.<span>&nbsp</span>{{$question->question_title}}</h4>
              <input type="hidden" name="question_id" value="{{$question->question_id}}">
          </div>
          <div class="col-md-12 ml-5">
            @php
            ++$i;
            @endphp
            @foreach($question->options as $option)


            @php
              $comments = App\Result::where('option_id', $option->option_id)->get();
            @endphp
            <label style="font-size:15px; font-weight:800;">Total Vote:&nbsp; <font style="color: #1976d2;">{{count($comments)}}</font></label>
            <input type="radio" name="group{{$i}}" value="{{$option->option_id}}"/>
            <label for="">{{$option->title}}</label><br>
            <br>
            @endforeach
          </div>
      </div>
      @endforeach
  </div>
  <div class="card-footer">
      <div class="row">
          <div class="col-md-8">
          </div>
          <div class="col-md-4 text-right">
          </div>
      </div>
  </div>
</div>
@endsection
