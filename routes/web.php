<?php

use Illuminate\Support\Facades\Route;

//frontsite
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\PaymentController;

//backsite
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\PermissionController;
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\UserController;
use App\Http\Controllers\Backsite\TypeUserController;
use App\Http\Controllers\Backsite\ConsultationController;
use App\Http\Controllers\Backsite\SpecialistController;
use App\Http\Controllers\Backsite\ConfigPaymentController;
use App\Http\Controllers\Backsite\DoctorController;
use App\Http\Controllers\Backsite\ReportAppointmentController;
use App\Http\Controllers\Backsite\ReportTransactionController;
use App\Http\Controllers\Backsite\ReportController;


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

Route::resource('/', LandingController::class);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    //application page
    Route::resource('appointment', AppointmentController::class);

    //payment page
    Route::resource('payment', PaymentController::class);
});

Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function() {

    // return view('dashboard');

     //dashboard
     Route::resource('dashboard', DashboardController::class);

     //management-access/permission
     Route::resource('permission', PermissionController::class);

     //management-access/role
     Route::resource('role', RoleController::class);

     //management-access/user
     Route::resource('user', UserController::class);

     //management-access/typeuser
     Route::resource('typeuser', TypeUserController::class);

     //master-data/consultation
     Route::resource('consultation', ConsultationController::class);

     //master-data/specialist
     Route::resource('specialist', SpecialistController::class);

     //master-data/configpayment
     Route::resource('configpayment', ConfigPaymentController::class);

     //operational/doctor
     Route::resource('doctor', DoctorController::class);

     //operational/reporttransaction
     Route::resource('appointment', ReportAppointmentController::class);
     
     //operational/transaction
     Route::resource('transaction', ReportTransactionController::class);

     //operational/report
     Route::resource('report', ReportController::class);

});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

?>