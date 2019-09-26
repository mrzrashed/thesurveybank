@extends('layouts.admin')
@section('contents')
<div class="row">
    <div class="col-12">
        <div class="card">
          @if(Session::has('success'))
            <script>
                swal({ title: "Success!", text: "Someone response on Survey.", timer:5000, icon: "success",});
            </script>
          @endif
          @if(Session::has('delete_success'))
            <script>
                swal({ title: "Success!", text: "Deleted Succefully", timer:5000, icon: "success",});
            </script>
          @endif
          @if(Session::has('error'))
           <script>
               swal({ title: "Opps!", text: "Anyone Does not attent on Survey.", timer:5000, icon: "warning",});
           </script>
         @endif
            <div class="card-body">
                <h4 class="card-title">Your Survey</h4>
                <div class="row">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('survey/add')}}" class="btn btn-sm btn-info"><i class="fa fa-th"></i> Create Survey</a>
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
                                    <a href="{{url('survey/view/'.$data->survey_id)}}" class="btn btn-sm btn-info"> Details</a>
                                    <a href="{{url('view/result/'.$data->survey_id)}}" class="btn btn-sm btn-info"></i>Report</a>
                                    <a href="{{url('survey/delete/'.$data->survey_id)}}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
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
