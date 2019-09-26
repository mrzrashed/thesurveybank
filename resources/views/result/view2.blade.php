@extends('layouts.admin')
@section('contents')
<div class="col-lg-4 col-md-5">
                        <!-- Column -->
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Order Stats</h4>
                            </div>
                            <div class="card-body collapse show">
                            <div id="morris-donut-chart" class="ecomm-donute" style="height: 317px;"></div>
                                <ul class="list-inline m-t-20 text-center">
                                <li >
                                    <h6 class="text-muted"><i class="fa fa-circle text-info"></i> Order</h65>
                                    <h4 class="m-b-0">8500</h4>
                                </li>
                                <li>
                                    <h6 class="text-muted"><i class="fa fa-circle text-danger"></i> Pending</h6>
                                    <h4 class="m-b-0">3630</h4>
                                </li>
                                <li>
                                    <h6 class="text-muted"> <i class="fa fa-circle text-success"></i> Delivered</h6>
                                    <h4 class="m-b-0">4870</h4>
                                </li>
                            </ul>

                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Offer for you</h4>
                            </div>
                            <div class="card-body collapse show bg-info">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item flex-column">
                                            <i class="fa fa-shopping-cart fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div class="text-white m-t-20">
                                                <i>- Ecommerce site</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column">
                                            <i class="fa fa-shopping-cart fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div class="text-white m-t-20">
                                                <i>- Ecommerce site</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column active">
                                            <i class="fa fa-shopping-cart fa-2x text-white"></i>
                                            <p class="text-white">25th Jan</p>
                                            <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                                      on buy</h3>
                                            <div class="text-white m-t-20">
                                                <i>- Ecommerce site</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Latest Products</h4>
                            </div>
                            <div class="card-body p-0 collapse show text-center">
                                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item flex-column">
                                            <img src="../assets/images/gallery/chair.jpg" alt="user">
                                            <h4 class="m-b-30">Brand New Chair</h4>
                                        </div>
                                        <div class="carousel-item flex-column">
                                            <img src="../assets/images/gallery/chair2.jpg" alt="user">
                                            <h4 class="m-b-30">Brand New Chair</h4>
                                        </div>
                                        <div class="carousel-item flex-column active carousel-item-left">
                                            <img src="../assets/images/gallery/chair3.jpg" alt="user">
                                            <h4 class="m-b-30">Brand New Chair</h4>
                                        </div>
                                        <div class="carousel-item flex-column carousel-item-next carousel-item-left">
                                            <img src="../assets/images/gallery/chair4.jpg" alt="user">
                                            <h4 class="m-b-30">Brand New Chair</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
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
