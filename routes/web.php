<?php

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisterController;
use App\Models\Employee;

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
    return view('home', [
        "tittle" => "Home",
        'active' => 'home',
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "tittle" => "profile",
        "active" => "profile",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        'active' => 'about',
        "nama" => "Agas Triawan",
        "email" => "agastriawan55@gmail.com",
        "sekolah" => "SMK N 1 DEPOK",
        "image" => "saya.jpg"

    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); //middleware('guest') => ini hanya bisa diakses oleh user yang belum ter-authenticate // name => buat ngasih tau kalau itu halaman login
Route::post('/login', [LoginController::class, 'authenticate']);

// LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']); // store => biasa digunakan untuk menyimpan

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth');

Route::resource('/admin/guru', TeacherController::class)->middleware('auth');
Route::resource('/admin/siswa', StudentController::class)->middleware('auth');
Route::resource('/admin/karyawan', EmployeeController::class)->middleware('auth');


Route::get('/guru', function () {
    return view('guru', [
        'active' => 'home',
        'teachers' => Teacher::all()
    ]);
});

Route::get('/siswa', function () {
    return view('siswa', [
        'active' => 'home',
        'students' => Student::all()
    ]);
});

Route::get('/karyawan', function () {
    return view('karyawan', [
        'active' => 'home',
        'employee' => Employee::all()
    ]);
});
