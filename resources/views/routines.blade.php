@extends('layouts.welcome_layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Routines</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    You are logged in! I only fixed the create account and login.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
