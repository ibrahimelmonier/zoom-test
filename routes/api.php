<?php

use App\Http\Controllers\Api\Zoom\MeetingController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get list of meetings.
Route::get('/meetings', [MeetingController::class,'list']);

// Create meeting room using topic, agenda, start_time.
Route::post('/meetings', [MeetingController::class,'create']);

// Get information of the meeting room by ID.
Route::get('/meetings/{id}', [MeetingController::class,'get'])->where('id', '[0-9]+');
Route::patch('/meetings/{id}', [MeetingController::class,'update'])->where('id', '[0-9]+');
Route::delete('/meetings/{id}', [MeetingController::class,'delete'])->where('id', '[0-9]+');
