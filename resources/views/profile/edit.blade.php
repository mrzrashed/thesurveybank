@extends('layouts.admin')
@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-light bg-primary">{{ __('The Survey Bank - Update') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('profile/update')}}" aria-label="{{ __('Update') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input value="{{$user->name}}" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input value="{{$user->email}}" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" disabled>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="depart" class="col-md-4 col-form-label text-md-right">{{ __('Departmet') }}</label>

                            <div class="col-md-6">
                                <select value="{{$user->dept}}" id="depart" type="text" class="form-control{{ $errors->has('depart') ? ' is-invalid' : '' }}" name="depart" value="{{ old('dept') }}" required>

                                  @if($user->department == 1)
                                  <option value="1">CSE</option>
                                  @elseif ($user->department== 2)
                                  <option value="2">SWE</option>
                                  @elseif ($user->department== 3)
                                  <option value="3">BBA</option>
                                  @elseif ($user->department== 4)
                                  <option value="4">EEE</option>
                                  @endif

                                  <option value="1">CSE</option>
                                  <option value="2">SWE</option>
                                  <option value="3">BBA</option>
                                  <option value="4">EEE</option>
                                </select>

                                @if ($errors->has('dept'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dept') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="utype" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label>

                            <div class="col-md-6">
                                <select id="utype" class="form-control{{ $errors->has('utype') ? ' is-invalid' : '' }}" name="utype" value="{{ old('utype') }}" required>
                                  @if($user->userRole == 4)
                                  <option value="4">Reseacher</option>
                                  @elseif($user->userRole == 5)
                                  <option value="5" >Survey User</option>
                                  @endif
                                  <option value="4">Reseacher</option>
                                  <option value="5" >Survey User</option>
                                </select>

                                @if ($errors->has('utype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('utype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="semester" class="col-md-4 col-form-label text-md-right">{{ __('Semester/Position') }}</label>

                            <div class="col-md-6">
                                <select id="semester" class="form-control{{ $errors->has('semester') ? ' is-invalid' : '' }}" name="semester" value="{{ old('semester') }}" required>
                                  @if($user->semester == 1)
                                  <option value="1" >First Semester</option>
                                  @elseif($user->semester	== 2)
                                  <option value="2" >Second Semester</option>
                                  @elseif($user->semester	== 3)
                                  <option value="3" >Third Semester</option>
                                  @elseif($user->semester	== 4)
                                  <option value="4" >Fourth Semester</option>
                                  @elseif($user->semester	== 5)
                                  <option value="5" >Fifth Semester</option>
                                  @elseif($user->semester	== 6)
                                  <option value="6" >Sixth Semester</option>
                                  @elseif($user->semester	== 7)
                                  <option value="7" >Seven Semester</option>
                                  @elseif($user->semester	== 8)
                                  <option value="8" >Eight Semester</option>
                                  @elseif($user->semester	== 9)
                                  <option value="9" >Nine Semester</option>
                                  @elseif($user->semester	== 10)
                                  <option value="10" >Ten Semester</option>
                                  @elseif($user->semester	== 11)
                                  <option value="11" >Eleven Semester</option>
                                  @elseif($user->semester	== 12)
                                  <option value="12" >Twelve Semester</option>
                                  @elseif($user->semester	== 13)
                                  <option value="13" >Teacher</option>
                                  @endif
                                  <option value="1" >First Semester</option>
                                  <option value="2" >Second Semester</option>
                                  <option value="3" >Third Semester</option>
                                  <option value="4" >Fourth Semester</option>
                                  <option value="5" >Fifth Semester</option>
                                  <option value="6" >Sixth Semester</option>
                                  <option value="7" >Seven Semester</option>
                                  <option value="8" >Eight Semester</option>
                                  <option value="9" >Nine Semester</option>
                                  <option value="10" >Ten Semester</option>
                                  <option value="11" >Eleven Semester</option>
                                  <option value="12" >Twelve Semester</option>
                                  <option value="13" >Teacher</option>
                                </select>
                                @if ($errors->has('semester'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('semester') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 text-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
