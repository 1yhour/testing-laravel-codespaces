<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use App\Models\Task;
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    
    
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Task::factory(100)->create();
    }
        
}
