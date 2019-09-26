@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-light bg-primary">{{ __('The Survey Bank - Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

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
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="example@diu.edu.bd" name="email" value="{{ old('email') }}" required>

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
                                <select id="depart" class="form-control{{ $errors->has('depart') ? ' is-invalid' : '' }}" name="depart" required>
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
                                  <option value="4">Reseacher</option>
                                  <option value="5" selected>Survey User</option>
                                </select>

                                @if ($errors->has('utype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('utype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="semester" class="col-md-4 col-form-label text-md-right">{{ __('Semester') }}</label>

                            <div class="col-md-6">
                                <select id="semester" class="form-control{{ $errors->has('semester') ? ' is-invalid' : '' }}" name="semester" value="{{ old('semester') }}" required>
                                  <option value="1" selected>First Semester</option>
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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
