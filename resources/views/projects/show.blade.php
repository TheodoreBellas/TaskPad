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
                   <span class="font-weight-bold">{{ $project->name }} (#{{ $project->id }})</span> for Customer <span class="font-weight-bold">{{ $project->customer->name }}</span>
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            <i class="fa fa-check"></i> {{ session('status') }}
                        </div>
                    @endif
                    @if(session('errors'))
                        <div class="alert alert-danger" role="alert">
                            <i class="fa fa-times-circle"></i>  We're sorry- we were unable to save your requested task log. Please try again.
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-12">
                        <h2><span class="badge {{ ($project->tasks->count()) ? 'badge-success text-dark' : 'badge-info'}}  align-top">{{ $project->tasks->count() }}</span> Project Tasks</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-sm-12">
                            <table class="table dt table-striped table-secondary text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th class="no-sort">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($project->tasks as $task)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $task->name }}</td>
                                            <td>{{ $task->description }}</td>
                                            <td>
                                                <ul class="navbar nav auto">
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        <i class="fas fa-chevron-circle-down fa-2x"></i>
                                                    </a>
                            
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a href="{{route('tasks.show', ['task' => $task->id])}}" class="dropdown-item" >
                                                            <i class="fa fa-info-circle"></i> Task Details 
                                                        </a>
                                                        <a href="#" class="dropdown-item open-task-log-modal" data-task-id="{{ $task->id }}" data-task-name="{{ $task->name }}">
                                                            <i class="fa fa-stopwatch"></i> Add Task Log Time
                                                        </a>
                                                        
                                                    </div>
                                                </li>
                                            </ul>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Include Form Modal --}}
                    @include('projects.partials.modal', ['project' => $project])
                    {{-- End Include Form Modal --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
