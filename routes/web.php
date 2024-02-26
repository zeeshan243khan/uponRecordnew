<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReleaseController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\TerritoriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProductAjaxController;



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
    return view('welcome');
}); 
  
Route::resource('products-ajax-crud', ProductAjaxController::class);
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth','user-access:user'])->group(function () {
     Route::get('/home', [HomeController::class, 'index'])->name('home');
     Route::resource('release', ReleaseController::class);
     Route::post('release/create-step-one', [HomeController::class,'postCreateStepOne'])->name('release.create.step.one.post');
    Route::get('territories/edit/{id}', [TerritoriesController::class,'edit'])->name('territories');
    Route::post('territories/update', [TerritoriesController::class,'update'])->name('territories.update');
   
    Route::resource('users', UserController::class);
    
    Route::get('/reports', [ReportController::class, 'index'])->name('reports');
    Route::get('report', [ReportController::class, 'report'])->name('report');
    Route::get('/export-csv/{startDate}/{endDate}', [ReportController::class,'exportCsv'])->name('export-csv');
    Route::post('insertForm', [TrackController::class, 'insertData'])->name('insertForm');
    Route::post('editForm/{id}', [TrackController::class, 'editData'])->name('editForm');
    Route::get('FetchData', [TrackController::class, 'FetchData'])->name('FetchData');
    Route::get('destroy', [TrackController::class, 'Destroy'])->name('destroy');
    Route::get('FetchData_byID', [TrackController::class, 'FetchData_byID'])->name('FetchData_byID');

    

});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   // Route::resource('territories', TerritoriesController::class);
   
    Route::post('territories/update', [TerritoriesController::class,'update'])->name('territories.update');
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('users', UserController::class);
    
    Route::get('/reports', [ReportController::class, 'index'])->name('reports');
    Route::get('report', [ReportController::class, 'report'])->name('report');
    Route::get('/export-csv/{startDate}/{endDate}', [ReportController::class,'exportCsv'])->name('export-csv');
    Route::post('insertForm', [TrackController::class, 'insertData'])->name('insertForm');
    Route::post('editForm/{id}', [TrackController::class, 'editData'])->name('editForm');
    Route::get('FetchData', [TrackController::class, 'FetchData'])->name('FetchData');
    Route::get('destroy', [TrackController::class, 'Destroy'])->name('destroy');
    Route::get('FetchData_byID', [TrackController::class, 'FetchData_byID'])->name('FetchData_byID');

    Route::resource('release', ReleaseController::class);


/*------------realse Controller ----------------->*/

});
  
