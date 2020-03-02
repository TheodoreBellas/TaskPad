@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TaskPad > Project List > {{ $project->name }} (#{{ $project->id }}) for Customer {{ $project->customer->name }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <legend>Project Tasks</legend>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @foreach($project->tasks as $task)
                            <div class="col-md-8 m-2 col-sm-12">
                                <div class="m-2 card">
                                    <div class="card-header">
                                        <h3>{{ $loop->index+1 }}. {{ $task->name }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text my-1">
                                            <label class="font-weight-bold">Task Description:</label>
                                            <h5>{{ $task->description }}</h5>
                                        </div>
                                        <br>
                                        <div class="card-text my-1">
                                            <label class="font-weight-bold">Action(s):</label>
                                            <br>
                                            <button class="text-center btn btn-info">+ Log Time</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
