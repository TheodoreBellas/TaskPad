@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('home') }}">TaskPad</a>
                    <i class="fa fa-angle-right mx-2"></i>
                    <a href="{{ route('projects.index') }}">Projects</a>
                    <i class="fa fa-angle-right mx-2"></i>
                    {{ $task->project->name }}
                    <i class="fa fa-angle-right mx-2"></i>
                    <span class="font-weight-bold">{{ $task->name }} (#{{ $task->id }})</span>
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            <i class="fa fa-check"></i> {{ session('status') }}
                        </div>
                    @endif
                    @if(session('errors'))
                        <div class="alert alert-danger" role="alert">
                            <i class="fa fa-times-circle"></i> We're sorry- we were unable to save your requested task log. Please try again.
                        </div>
                    @endif

                    <div class="card-text">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-sm-12">
                                <legend>Task Details</legend>
                                <dl class="row">
                                    <dt class="col-sm-3">Project Name</dt>
                                    <dd class="col-sm-9">{{ $task->project->name }}</dd>

                                    <dt class="col-sm-3">Customer</dt>
                                    <dd class="col-sm-9">
                                        {{ $task->project->customer->name }}
                                    </dd>

                                    <dt class="col-sm-3">Task Name</dt>
                                    <dd class="col-sm-9">{{$task->name}}</dd>

                                    <dt class="col-sm-3">Task Description</dt>
                                    <dd class="col-sm-9">{{$task->description}}</dd>
                                </dl>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <legend>Tools</legend>
                                <dl class="row">
                                    <dt class="col-sm-3">Start Live Timer</dt>
                                    <dd class="col-sm-9">
                                        <a href="#" class="timer-start" id="timer-start">
                                            <i class="fa fa-play fa-2x"></i>
                                        </a>
                                    </dd>

                                    {{-- <dt class="col-sm-3">Customer</dt>
                                    <dd class="col-sm-9">
                                        {{ $task->project->customer->name }}
                                    </dd>

                                    <dt class="col-sm-3">Task Name</dt>
                                    <dd class="col-sm-9">{{$task->name}}</dd>

                                    <dt class="col-sm-3">Task Description</dt>
                                    <dd class="col-sm-9">{{$task->description}}</dd>

                                    <dt class="col-sm-3">Nesting</dt>
                                    <dd class="col-sm-9">
                                        <dl class="row">
                                            <dt class="col-sm-4">Nested definition list</dt>
                                            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                        </dl>
                                    </dd> --}}
                                </dl>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
