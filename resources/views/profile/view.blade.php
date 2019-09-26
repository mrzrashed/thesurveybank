@extends('layouts.admin')
@section('contents')
<div class="row">
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30"> <img src="{{asset('admin/assets/images/users/1.jpg')}}" class="img-circle" width="150" />
                    <h4 class="card-title m-t-10">{{$data->name}}</h4>
                    <h6 class="card-subtitle">{{$data->roleName->userRole}}</h6>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-4"><a href="javascript:void(0)" class="link">
                                <font class="font-medium">{{$data->credits}} BDT</font>
                            </a></div>
                        <div class="col-4"><a href="javascript:void(0)" class="link">
                                <font class="font-medium">Your IP: {{request()->ip()}}</font>
                            </a></div>
                    </div>
                </center>
            </div>
            <div>
                <hr>
            </div>
            <div class="card-body"> <small class="text-muted">Email address </small>
                <h6>{{$data->email}}</h6>
                @if(Auth::user()->userRole >= 4)
                <small class="text-muted p-t-30 db">Departmet</small>
                <h6>{{Auth::user()->departmentName->department_name}}</h6>
                <small class="text-muted p-t-30 db">Joining Date</small>
                <h6>{{$data->created_at->format('d M, Y | h:i:s A')}}</h6>
                <small class="text-muted p-t-30 db">Position</small>
                <h6>{{Auth::user()->positionName->semester_name}}</h6>
                @endif
                <small class="text-muted p-t-30 db">Social Profile</small>
                <br />
                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
            </div>
        </div>
    </div>
</div>


@endsection
