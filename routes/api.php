<?php

use App\Http\Controllers\CheckinController;
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

Route::apiResources([
                        'byDate' => CheckinController::class,
                        'byLastName' => CheckinController::class,
                        'byFirstName' => CheckinController::class,
                        'byDepartment' => CheckinController::class,
                    ]);

