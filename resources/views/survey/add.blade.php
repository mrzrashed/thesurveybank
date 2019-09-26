@extends('layouts.admin')
@section('contents')
<div class="card">
    <form class="form" action="{{url('survey/add/insertSurvey')}}" method="post">
        @csrf

        @if(Session::has('error_query'))
          <script>
              swal({ title: "Failed!", text: "Query Error Please Contact with us to fixed it", timer:5000, icon: "success",});
          </script>
        @endif
        @if(Session::has('error_money'))
         <script>
             swal({ title: "Opps!", text: "Please Recharge Your Account.", timer:5000, icon: "warning",});
         </script>
       @endif
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <i class="fa fa-gg-circle"></i> Create Survey
                </div>
                <div class="col-md-4 text-right">
                    <a href="{{url('profile/survey')}}" class="btn btn-sm btn-info"><i class="fa fa-th"></i> All Survey</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group m-t-40 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Survey Title</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" value="" id="example-text-input" name="survey" required>
                </div>
            </div>
            <div class="form-group m-t-40 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Targeted People</label>
                <div class="col-md-10">
                  <select class="form-control" name="depart" value="" required>
                    <option value="1">CSE</option>
                    <option value="2">SWE</option>
                    <option value="3">BBA</option>
                    <option value="4">EEE</option>
                  </select>
                </div>
            </div>
            <!-- Question 1 -->
            <div class="form-group m-t-40 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Question 1</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" value="" id="example-text-input" name="question1" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-month-input" class="col-md-2 col-form-label">Select Option</label>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp1">
                        <option>Choose...</option>
                        <option value="Strongly Agree" selected>Strongly Agree</option>
                        <option value="Agree">Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp2">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" selected>Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp3">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral"selected>Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp4">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree" selected>Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp5">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree" >Disagree</option>
                        <option value="Strongly Disagree" selected>Strongly Disagree</option>
                    </select>
                </div>
            </div>
<!-- Question 2 -->
            <div class="form-group m-t-40 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Question 2</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" value="" id="example-text-input" name="question2" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-month-input" class="col-md-2 col-form-label">Select Option</label>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp1">
                        <option>Choose...</option>
                        <option value="Strongly Agree" selected>Strongly Agree</option>
                        <option value="Agree">Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp2">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" selected>Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp3">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral"selected>Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp4">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree" selected>Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp5">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree" >Disagree</option>
                        <option value="Strongly Disagree" selected>Strongly Disagree</option>
                    </select>
                </div>
            </div>
            <!-- Question 3 -->
            <div class="form-group m-t-40 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Question 3</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" value="" id="example-text-input" name="question3" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-month-input" class="col-md-2 col-form-label">Select Option</label>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp1">
                        <option>Choose...</option>
                        <option value="Strongly Agree" selected>Strongly Agree</option>
                        <option value="Agree">Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp2">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" selected>Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp3">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral"selected>Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp4">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree" selected>Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp5">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree" >Disagree</option>
                        <option value="Strongly Disagree" selected>Strongly Disagree</option>
                    </select>
                </div>
            </div>
            <!-- Question 4 -->
            <div class="form-group m-t-40 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Question 4</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" value="" id="example-text-input" name="question4" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-month-input" class="col-md-2 col-form-label">Select Option</label>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp1">
                        <option>Choose...</option>
                        <option value="Strongly Agree" selected>Strongly Agree</option>
                        <option value="Agree">Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp2">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" selected>Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp3">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral"selected>Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp4">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree" selected>Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp5">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree" >Disagree</option>
                        <option value="Strongly Disagree" selected>Strongly Disagree</option>
                    </select>
                </div>
            </div>
            <!-- Question 5 -->
            <div class="form-group m-t-40 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Question 5</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" value="" id="example-text-input" name="question5" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-month-input" class="col-md-2 col-form-label">Select Option</label>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp1">
                        <option>Choose...</option>
                        <option value="Strongly Agree" selected>Strongly Agree</option>
                        <option value="Agree">Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp2">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" selected>Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp3">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral"selected>Neutral</option>
                        <option value="Disagree">Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp4">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree" selected>Disagree</option>
                        <option value="Strongly Disagree">Strongly Disagree</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="qOp5">
                        <option>Choose...</option>
                        <option value="Strongly Agree">Strongly Agree</option>
                        <option value="Agree" >Agree</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Disagree" >Disagree</option>
                        <option value="Strongly Disagree" selected>Strongly Disagree</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-md-8">
                </div>
                <div class="col-md-4 text-right">
                    <input type="submit" class="btn btn-sm btn-info" value="Create New Survey">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
