@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TaskPad > Project List</div>

                <div class="card-body">
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
                        <table class="table datatable table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Customer</th>
                                    <th>Tasks</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody class=>
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->customer->name}}</td>
                                    <td>{{$project->tasks->count()}}</td>
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
