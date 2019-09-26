@extends('layouts.admin')
@section('contents')
<div class="card">
    <form class="form" action="{{url('survey/submitresult')}}" method="post">
      @csrf
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                      <h3>Title:</h3>
                </div>
                <div class="col-md-4 text-right">
                    <a href="#" class="btn btn-sm btn-info"><i class="fa fa-th"></i> All Survey</a>
                </div>
            </div>
        </div>
        <div class="card-body">
          @foreach($questions as $question)
            <div class="row mb-5">
                <div class="col-md-12">
                    <h4>{{$question->question_title}}</h4>
                </div>
                <div class="col-md-12 ml-5">
                {{--@php
                  $comments = App\Result::where('option_id', $option->option_id)->get();
                @endphp--}}
                @foreach($question->options as $option)
                  <input type="radio" name="" value="">{{$option->title}} <br>
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
        </div>
    </form>
</div>
@endsection
