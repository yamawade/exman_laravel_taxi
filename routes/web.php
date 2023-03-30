<?php

use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\ClientdController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TrajetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index'); 
});
Route::get('/about', function () {
    return view('about'); 
});
Route::get('/service', function () {
    return view('service'); 
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::group(['middleware' => ['auth']], function() { 
Route::get('/dashboard', 'App\Http\Controllers\DashBoardController@index')->name('dashboard');

});

Route::resource('clients',ClientdController::class);
Route::resource('chauffeurs',ChauffeurController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('adminlogin', function () {
    return view('admin1/index');
});

Route::get('/dashboardAdmin', function () {
    return view('admin1/dashboardAdmin');
});

Route::get('admin1/utilisateur',[RegisteredUserController::class,'usersdata']);

//REGION
Route::get('/admin1/create', [RegionController::class, 'create'])->name('regionpage');
Route::post('/store', [RegionController::class, 'store']);
Route::get('/admin1/create', [RegionController::class, 'index']);

//TRAJET
Route::get('/admin1/createTrajet', [TrajetController::class, 'create'])->name('trajetpage');
Route::post('/storeTrajet', [TrajetController::class, 'storeTrajet']);


Route::get('trajet/{regionId}', [ClientdController::class, 'getByRegion']);
Route::get('getTarif/{trajetId}', [ClientdController::class, 'getTarif']);

