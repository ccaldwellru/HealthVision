@extends('layouts.welcome_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- name -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name">
                                @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- email -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email Address">
                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- height -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input id="height" type="number" class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}" name="height" value="{{ old('height') }}" required placeholder="Height (inches)" max="107" min="21">
                                @if ($errors->has('height'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('height') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- current weight -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input id="current_weight" type="number" class="form-control{{ $errors->has('current_weight') ? ' is-invalid' : '' }}" name="current_weight" value="{{ old('current_weight') }}" required placeholder="Current Weight (lbs)" min="90" max="1000">
                                @if ($errors->has('current_weight'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('current_weight') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- goal weight -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input id="goal_weight" type="number" class="form-control{{ $errors->has('goal_weight') ? ' is-invalid' : '' }}" name="goal_weight" value="{{ old('goal_weight') }}" required placeholder="Goal Weight (lbs)" min="90" max="1000">
                                @if ($errors->has('goal_weight'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('goal_weight') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- current bmi -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input id="current_bmi" type="number" class="form-control{{ $errors->has('current_bmi') ? ' is-invalid' : '' }}" name="current_bmi" value="{{ old('current_bmi') }}" required placeholder="Current BMI" step="0.01" max="65" min="20">
                                @if ($errors->has('current_bmi'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('current_bmi') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- goal bmi -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input id="goal_bmi" type="number" class="form-control{{ $errors->has('goal_bmi') ? ' is-invalid' : '' }}" name="goal_bmi" value="{{ old('goal_bmi') }}" required placeholder="Goal BMI" step="0.01" max="65" min="20">
                                @if ($errors->has('goal_bmi'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('goal_bmi') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- current waist -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input id="current_waist" type="number" class="form-control{{ $errors->has('current_waist') ? ' is-invalid' : '' }}" name="current_waist" value="{{ old('current_waist') }}" required placeholder="Current Waist (inches)" max="100" min="20">
                                @if ($errors->has('current_waist'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('current_waist') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- goal waist -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input id="goal_waist" type="number" class="form-control{{ $errors->has('goal_waist') ? ' is-invalid' : '' }}" name="goal_waist" value="{{ old('goal_waist') }}" required placeholder="Goal Waist" max="100" min="20">
                                @if ($errors->has('goal_waist'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('goal_waist') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- experience level -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <select id="experience_level" class="form-control{{ $errors->has('experience_level') ? ' is-invalid' : '' }}" name="experience_level" value="{{ old('experience_level') }}" required>
                                    <option selected="true" disabled="true">-- Experience Level --</option>
                                    <option value="Beginner">Beginner</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Experienced">Experienced</option>
                                    <option value="Advanced">Advanced</option>
                                </select>
                                @if ($errors->has('experience_level'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('experience_level') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- password -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                                @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- confirm password -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                            </div>
                        </div>
                        <!-- submit button -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6  offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    CREATE ACCOUNT
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
