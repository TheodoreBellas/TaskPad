<?php

namespace App\Http\Controllers;

use App\Models\TaskLog;
use Illuminate\Http\Request;
use Task;

class TaskLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_id'    => 'required|exists:projects,id',
            'task_id'       => 'required|exists:tasks,id',
            'duration_minutes'  => 'required|numeric',
        ]);

        $task_id = $request->input('task_id');
        $project_id = $request->input('project_id');
        $duration = $request->input('duration_minutes');

        if (!Task::where(['id' => $task_id, 'project_id' => $project_id])->first()) {
            return redirect()->back()->withErrors("Failed to load Task to create Task Log entry for.");
        }

        $task_log = new TaskLog();
        $task_log->task_id = $task_id;
        $task_log->user_id = $request->user()->id;
        $task_log->duration_minutes = $duration;
        $task_log->save();

        return redirect()->back()->with('status', "Successfully saved your task log entry of {$duration} minute(s).");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaskLog  $taskLog
     * @return \Illuminate\Http\Response
     */
    public function show(TaskLog $taskLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaskLog  $taskLog
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskLog $taskLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaskLog  $taskLog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskLog $taskLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaskLog  $taskLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskLog $taskLog)
    {
        //
    }
}
