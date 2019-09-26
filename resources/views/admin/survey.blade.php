@extends('layouts.admin')
@section('contents')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Survey</h4>
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
                                <th>Title</th>
                                <th>Creator</th>
                                <th>Department</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($survey as $serial=>$data)
                            <tr>
                                <td>{{++$serial}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->researcherName->name}}</td>
                                <td>{{$data->deparmentName->department_name}}</td>

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
