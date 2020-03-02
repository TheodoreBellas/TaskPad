@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TaskPad > Projects</div>

                <div class="card-body col-md-12">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($projects->isEmpty())
                        <div class="card-text text-center">
                            Sorry- no projects have been created just yet! Check back later.
                        </div>
                    @else
                        <table class="dt table table-striped table-bordered table-secondary text-center">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Customer</th>
                                    <th>Tasks</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->customer->name}}</td>
                                    <td><span class="badge badge-info">{{$project->tasks->count()}}</span></td>
                                    <td><a href="{{ route('projects.show', $project->id)}}">>></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
