@extends('layouts.admin')
@section('contents')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Admin List</h4>
                <h6 class="card-subtitle"></h6>
                <div class="row">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4 text-right">
                    </div>
                </div>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Date of Join</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($admin as $serial=>$data)
                            <tr>
                                <td>{{++$serial}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->roleName->userRole}}</td>
                                <td>{{$data->created_at->format('D M,Y | h:i:s A')}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
