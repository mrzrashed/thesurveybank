@extends('layouts.admin')
@section('contents')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Your Survey</h4>
                <h5>We will keep your identity private, Don't Worry About It!</h5>
                <div class="row">
                    <div class="col-md-8">
                    </div>
                </div>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Creator</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                          @php
                            $i= 1;
                          @endphp
                          @foreach($allSurvey as $id=>$data)
                            <tr>
                                <td>{{++$id}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->researcherName->name}}</td>
                                <td>
                                    <a href="{{url('user/view/'.$data->survey_id)}}" class="btn btn-sm btn-info">Submit Your Opinions</a>
                                </td>
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
