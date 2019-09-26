@extends('layouts.admin')
@section('contents')
<div class="card">
  <div class="card-header">
      <div class="row">
          <div class="col-md-8">
              <i class="fa fa-gg-circle"></i> Your Balance
          </div>
          <div class="col-md-4 text-right">
          </div>
      </div>
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered table-striped view_customize_table">
                <tr>
                    <td>Total Balance</td>
                    <td>:</td>
                    <td>{{Auth::user()->credits}}</td>
                </tr>

                <tr>
                    <td>Last Transaction Date</td>
                    <td>:</td>
                    <td>{{Auth::user()->updated_at}}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
  </div>
  <div class="card-footer">
    <div class="row text-center" >
      <div class="col-md-3  align-self-center">
        <h4>Withdraw Your Money With</h4>
      </div>
      <div class="col-md-1  align-self-center">
        <a href="#">
          <img class="img-fluid" src="{{asset('payment/bkash.png')}}" alt="bKash">
        </a>
      </div>
      <div class="col-md-1  align-self-center">
        <a href="#">
          <img class="img-fluid" src="{{asset('payment/roket.jpg')}}" alt="bKash">
        </a>
      </div>

    </div>


  </div>
</div>

@endsection
