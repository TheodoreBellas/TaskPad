<div class="modal fade" id="task-log-modal" tabindex="-1" role="dialog" aria-labelledby="task-log-modal-tile" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Task Log - <span id="task-log-title"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('task-logs.create') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-8">
                            <label for="">Time Spent On This Task (Minutes)</label>
                            <input type="number" required class="form-control" name="duration_minutes">
                            <input type="hidden" id="task-id" name="task_id" value="" />
                            <input type="hidden" id="project-id" name="project_id" value="{{ $project->id }}" />
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-12">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel / Close</button>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save Task Log</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
