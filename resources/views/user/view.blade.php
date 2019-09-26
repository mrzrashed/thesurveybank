@extends('layouts.admin')
@section('contents')
<div class="card">
  <form class="form" action="{{url('survey/submitresult')}}" method="post">
    @csrf
  <div class="card-header">
      <div class="row">
          <div class="col-md-8">
                <h3>Title:{{$survey->title}}</h3>
                <input type="hidden" name="survey_id" value="{{$survey->survey_id}}">

                @php
                $questions = \App\Result::where('survey_id', $survey->survey_id)->where('user_id',Auth::user()->id)->get()->count();
                @endphp

                

          </div>
          <div class="col-md-4 text-right">
              <a href="{{url('user/survey')}}" class="btn btn-sm btn-info"><i class="fa fa-th"></i> All Survey</a>
          </div>
      </div>
  </div>
  <div class="card-body">
    @if($questions >=5)
    <h4>You have Submitted this survey</h4>


    @else
    @php
    $questions = \App\Question::where('survey_id', $survey->survey_id)->get();
    $i=0;
    $j=0;
    @endphp
    @foreach($questions as $key=>$question)
      <div class="row mb-5">
          <div class="col-md-12">
              <h4>{{++$key}}.<span>&nbsp</span>{{$question->question_title}}</h4>
              <input type="hidden" name="question_id{{$key}}" value="{{$question->question_id}}">


          </div>
          <div class="col-md-12 ml-5">
            @php
            ++$i;
            @endphp
            @foreach($question->options as $option)
            <input type="radio" id="radio{{$j}}" name="group{{$i}}" value="{{$option->option_id}}" required/>
            <label for="radio{{$j}}">{{$option->title}}</label>
            @php
            ++$j;
            @endphp

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
            <input type="submit" class="btn btn-sm btn-info">
          </div>
      </div>
      @endif
  </div>
</form>
</div>
@endsection
