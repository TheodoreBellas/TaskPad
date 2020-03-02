@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Welcome to TaskPad!</h4>
                    <small>Project Management Made Simple</small>
                </div>
                <div class="card-body">
                    To get started, <a href="{{ route('register') }}">{{ __('register an account') }}</a>
                    or <a href="{{ route('login') }}">{{ __('log in') }}</a>!

                </div>
            </div>
        </div>
    </div>
</div>
@endSection
