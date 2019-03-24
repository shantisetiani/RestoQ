@extends('layout')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h1 class="title">Register</h1>
</div>
<form class="reservationForm" role="form" method="POST" action="{{ url('/Register') }}">
    {{csrf_field()}}
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label>Name</label>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <input id="name" type="text" class="formText" name="name" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label>Gender</label>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <input id="male" type="radio" name="gender" value="Male" required autofocus>Male
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <input id="female" type="radio" name="gender" value="Female" required autofocus>Female
        </div>

        @if ($errors->has('gender'))
            <span class="help-block">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>
        @endif
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label>Date of Birth</label>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <input id="dob" type="date" class="formText" name="dob" value="{{ old('dob') }}" required autofocus>

            @if ($errors->has('dob'))
                <span class="help-block">
                    <strong>{{ $errors->first('dob') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label>E-Mail Address</label>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <input id="email" type="email" class="formText" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label>Password</label>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <input id="password" type="password" class="formText" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label>Confirm Password</label>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <input id="password-confirm" type="password" class="formText" name="password_confirmation" required>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label>Phone</label>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <input id="phone" type="text" class="formText" name="phone" value="{{ old('phone') }}" required autofocus>

            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label>Address</label>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <textarea class="formText" name="address"></textarea>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <input type="submit" class="btn btn-primary" value="Register">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    </div>
</form>
@endsection
