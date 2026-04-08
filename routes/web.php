<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
Route::get("tasks", [TaskController::class,"index"])->name("task.index");
Route::post("tasks/storeTask", [TaskController::class, "storeTask"])->name("task.storeTask");
Route::delete("tasks/{id}", [TaskController::class, "deleteTask"])->name("task.deleteTask");
Route::get("tasks/{id}", [TaskController::class, "showTask"])->name("task.showTask");
Route::put("updates/{id}", [TaskController::class,"updateTask"])->name("task.updateTask");