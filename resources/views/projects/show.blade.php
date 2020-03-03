@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    TaskPad > Projects > <span class="font-weight-bold">{{ $project->name }} (#{{ $project->id }})</span> for Customer <span class="font-weight-bold">{{ $project->customer->name }}</span>
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
                        <div class="col-12">
                            <legend>Project Tasks <span class="badge badge-info">{{ $project->tasks->count() }}</span></legend>
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
                                                <a href="#" class="open-task-log-modal" data-task-id="{{ $task->id }}" data-task-name="{{ $task->name }}">
                                                    <i data-toggle="tooltip" data-placement="top" title="Log Task Time" class="fas fa-2x fa-clock"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Include Form Modal --}}
                    @include('projects.partials.modal', ['project' => $project]);
                    {{-- End Include Form Modal --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
