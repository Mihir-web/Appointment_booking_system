<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ContactLeadsController;
use App\Http\Controllers\FinancingLeadsController;
use App\Http\Controllers\InventoryGalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\InventoryFrontController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\HappyClientsController;
use App\Http\Controllers\AboutUsController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('homepage');

$meta_title = "";
$meta_description = "";
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('homepage');
Route::get('/doctor-dashboard', function(){
    return view('doctordashboard');
});

Route::get('/appointment-requests', function(){
    return view('appointmentrequest');
});

Route::get('/doctor-appointments', function(){
    return view('DoctorAppointments');
});

Route::get('/my-patients', function(){
    return view('MyPatients');
});


Route::get('/patient-dashboard', function(){
    return view('PatientDashboard');
});

Route::get('/patient-appointments', function(){
    return view('PatientAppointments');
});


Route::get('admin/dashboard', function(){
    return view('admin.adminHome');
})->name('dashboard');

Route::get('admin/appointments', function(){
    return view('admin.appointments');
})->name('appointments');

Route::get('admin/specialities', function(){
    return view('admin.specialities');
})->name('specialities');

Route::get('admin/doctors', function(){
    return view('admin.doctors');
})->name('doctors');

Route::get('admin/patients', function(){
    return view('admin.patients');
})->name('patients');


// Admin routes
Route::group(['prefix' => 'admin'], function () {
Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin','middleware' => 'is_admin'], function () {
  
// Route::get('home', [HomeController::class, 'adminHome'])->name('adminHome');



});
