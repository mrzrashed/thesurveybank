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


    @if(Session::has('success'))
      <script>
          swal({ title: "Success!", text: "Created Successfully :)", timer:5000, icon: "success",});
      </script>
    @endif
    @if(Session::has('error'))
     <script>
         swal({ title: "Opps!", text: "Please Recharge Your Account.", timer:5000, icon: "warning",});
     </script>
   @endif
    @php
    $questions = \App\Question::where('survey_id', $survey->survey_id)->get();
    $i=0;
    $j=0;
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
            <input type="radio" name="group{{$i}}" class="" id="demo{{$j}}" value="{{$option->option_id}}"/>
            <label for="demo{{$j}}">{{$option->title}}</label>

            @php
            $j++;
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
          </div>
      </div>
  </div>
</div>
@endsection
