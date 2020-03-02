<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_contents = File::get('database/seeds/json/projects.json');

        $json = json_decode($file_contents, true);

        foreach ($json as $entry) {
            $project = Project::firstOrCreate($entry);
        }
    }
}
