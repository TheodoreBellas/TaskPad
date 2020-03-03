<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateDemoData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'operations:create-demo-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates Faker-based demo data, including users, customers, projects, tasks, and task logs.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        factory(\App\Models\User::class, 15)->create();

        factory(\App\Models\Customer::class, 10)->create()->each(function ($customer) {
            factory(\App\Models\Project::class, 5)->create(['customer_id' => $customer->id])->each(function ($project) {
                factory(\App\Models\Task::class, rand(0, 7))->create(['project_id' => $project->id])->each(function ($task) {
                    factory(\App\Models\TaskLog::class, rand(0, 9))->create(['task_id' => $task->id, 'user_id' => \App\Models\User::inRandomOrder()->first()->id]);
                });
            });
        });

        $this->info('Finished. 15 users, 10 customers, and 50 projects with related tasks/task logs created successfully!');
    }
}
