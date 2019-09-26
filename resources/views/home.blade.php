@extends('layouts.admin')
@section('contents')
<div class="container-fluid">
  @if(Session::has('success'))
    <script>
        swal({ title: "Success!", text: "Welcome to Dashboard", timer:5000, icon: "success",});
    </script>
  @endif
  @if(Session::has('error'))
   <script>
       swal({ title: "Opps!", text: "You are not authorize", timer:5000, icon: "warning",});
   </script>
 @endif
 @if(Session::has('error_money'))
  <script>
      swal({ title: "Opps!", text: "You Don't Have Credits", timer:5000, icon: "warning",});
  </script>
@endif
  <div class="card-group">
      <div class="card">
          <div class="card-body">
              <div class="row">
                  <div class="col-12">
                      <h2 class="m-b-0"><i class="fa fa-users text-info"></i></h2>
                      <h3 class="">{{Auth::user()->count()}}</h3>
                      <h6 class="card-subtitle">Total User</h6></div>
                  <div class="col-12">
                      <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="card">
          <div class="card-body">
              <div class="row">
                  <div class="col-12">
                      <h2 class="m-b-0"><i class="fa fa-bars text-success"></i></h2>
                      <h3 class="">{{\App\Survey::all()->count()}}</h3>
                      <h6 class="card-subtitle">Total Survey</h6></div>
                  <div class="col-12">
                      <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="card">
          <div class="card-body">
              <div class="row">
                  <div class="col-12">
                      <h2 class="m-b-0"><i class="fa fa-search text-purple"></i></h2>
                      <h3 class="">{{\App\User::where('userRole',4)->get()->count()}}</h3>
                      <h6 class="card-subtitle">Total Researcher</h6></div>
                  <div class="col-12">
                      <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="card">
          <div class="card-body">
              <div class="row">
                  <div class="col-12">
                      <h2 class="m-b-0"><i class="fa fa-user text-warning"></i></h2>
                      <h3 class="">{{\App\User::where('userRole',5)->get()->count()}}</h3>
                      <h6 class="card-subtitle">Total Survey User</h6></div>
                  <div class="col-12">
                      <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="row">

      <div class="col-lg-4">
          <div class="card card-inverse card-success">
              <div class="card-body">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Carousel items -->
                      <div class="carousel-inner">
                          <div class="carousel-item flex-column carousel-item-next carousel-item-left">
                              <i class="fa fa-facebook fa-2x text-white"></i>
                              <p class="text-white">Advertisement</p>
                              <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                        on buy</h3>
                              <div class="text-white m-t-20">
                                  <i>- post form wrap</i>
                              </div>
                          </div>
                          <div class="carousel-item flex-column">
                              <i class="fa fa-facebook fa-2x text-white"></i>
                              <p class="text-white">25th Jan</p>
                              <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                        on buy</h3>
                              <div class="text-white m-t-20">
                                  <i>- post form wrap</i>
                              </div>
                          </div>
                          <div class="carousel-item flex-column active carousel-item-left">
                              <i class="fa fa-facebook fa-2x text-white"></i>
                              <p class="text-white">25th Jan</p>
                              <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                        on buy</h3>
                              <div class="text-white m-t-20">
                                  <i>- post form wrap</i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-4">
          <div class="card card-inverse card-danger">
              <div class="card-body">
                  <div id="myCarouse2" class="carousel slide" data-ride="carousel">
                      <!-- Carousel items -->
                      <div class="carousel-inner">
                          <div class="carousel-item flex-column carousel-item-next carousel-item-left">
                              <i class="fa fa-google-plus fa-2x text-white"></i>
                              <p class="text-white">Advertisement</p>
                              <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                        on buy</h3>
                              <div class="text-white m-t-20">
                                  <i>- Eric fandanc</i>
                              </div>
                          </div>
                          <div class="carousel-item flex-column">
                              <i class="fa fa-google-plus fa-2x text-white"></i>
                              <p class="text-white">25th Jan</p>
                              <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                        on buy</h3>
                              <div class="text-white m-t-20">
                                  <i>- Numbro zomix</i>
                              </div>
                          </div>
                          <div class="carousel-item flex-column active carousel-item-left">
                              <i class="fa fa-google-plus fa-2x text-white"></i>
                              <p class="text-white">25th Jan</p>
                              <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                        on buy</h3>
                              <div class="text-white m-t-20">
                                  <i>- Sitrix stock</i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-4">
          <div class="card card-inverse card-info">
              <div class="card-body">
                  <div id="myCarouse3" class="carousel slide" data-ride="carousel">
                      <!-- Carousel items -->
                      <div class="carousel-inner">
                          <div class="carousel-item flex-column carousel-item-next carousel-item-left">
                              <i class="fa fa-twitter fa-2x text-white"></i>
                              <p class="text-white">Advertisement</p>
                              <h3 class="text-white font-light">Tweet now <span class="font-bold">50% Off</span><br>
                        on buy</h3>
                              <div class="text-white m-t-20">
                                  <i>- @shoperstaff</i>
                              </div>
                          </div>
                          <div class="carousel-item flex-column">
                              <i class="fa fa-twitter fa-2x text-white"></i>
                              <p class="text-white">25th Jan</p>
                              <h3 class="text-white font-light">Sachin #star <span class="font-bold">50% Off</span><br>
                        on buy</h3>
                              <div class="text-white m-t-20">
                                  <i>- #shoperstaff</i>
                              </div>
                          </div>
                          <div class="carousel-item flex-column active carousel-item-left">
                              <i class="fa fa-twitter fa-2x text-white"></i>
                              <p class="text-white">25th Jan</p>
                              <h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
                        on buy</h3>
                              <div class="text-white m-t-20">
                                  <i>- @shoperstaff</i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>

</div>


@endsection
