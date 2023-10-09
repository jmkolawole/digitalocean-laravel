<?php

use App\Http\Controllers\MailController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $students = Student::all();
    return view('students')->with(compact('students'));
})->name("/");

Route::get('/create', function () {
    return view('create_student');
})->name('create');

Route::get('/mail', [MailController::class, 'send']);

Route::post('/create', function (Request $request) {
    Student::create([
        "name" => $request->name,
        "age" => $request->age,
        "email" => $request->email
    ]);

    return redirect()->route("/");
})->name('save');
