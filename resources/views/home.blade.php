@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TaskPad > Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-text text-center">
                     Welcome to your dashboard! Choose from the option(s) below.
                    </div>
                    <div class="card-text my-3">
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <a href="{{ route('projects.index')}}" class="btn btn-block btn-link btn-info text-dark">View Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
