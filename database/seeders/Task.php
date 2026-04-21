<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Task extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tasks')->insert(
            [
                [
                    'title' => 'Task 1',
                    'is_completed' => false,
                ],
                [
                    'title' => 'Task 2',
                    'is_completed' => true,
                ],
                [
                    'title' => 'Task 3',
                    'is_completed' => false,
                ],
            ]
        );
    }
}
