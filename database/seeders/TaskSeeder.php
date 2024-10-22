<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = new Task();
        $task->title = 'Star the project';
        $task->description = 'If you like this project, you can show me your support by giving me a star in my github repository :)';
        $task->user_id = User::find(1)->id;
        $task->save();
    }
}
