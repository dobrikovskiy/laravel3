<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get('/test_database', function () {
    // Создание нового сотрудника
    $employee = new Employee();
    $employee->name = 'John Doe';
    $employee->position = 'Software Engineer';
    $employee->save();

    return 'Employee created successfully!';
});
