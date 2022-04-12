<?php
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

# Test Check 
Route::get('/', function(){
    return response()->json([
        'stuff' => phpinfo()
    ]);
});

# Get training
Route::get('/training', [TrainingController::class, 'index']);

# Post training
Route::post('/training',[TrainingController::class, 'store']);

# Get Employee
Route::get('/employee', [EmployeeController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
