<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_contents = File::get('database/seeds/json/users.json');

        $json = json_decode($file_contents, true);

        foreach ($json as $entry) {
            $user = User::firstOrCreate($entry);
        }
    }
}
