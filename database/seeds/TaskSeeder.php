<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_contents = File::get('database/seeds/json/tasks.json');

        $json = json_decode($file_contents, true);

        foreach ($json as $task_entry) {
            $task = Task::firstOrCreate(array_diff_key($task_entry, array_flip((array) ['task_logs'])));
            
            foreach($task_entry['task_logs'] as $task_log_entry) {
                $task_log = TaskLog::firstOrNew($task_log_entry);
                if(!$task_log->exists) {
                    $task_log->task_id = $task->id;
                    $task_log->save();
                }
            }
        }
    }
}
