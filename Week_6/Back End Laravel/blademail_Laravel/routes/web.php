<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prController;
use App\Http\Controllers\leaveController;
use App\Http\Controllers\conveyanceController;
use App\Http\Controllers\prApprovalController;
use App\Http\Controllers\leaveApprovalController;
use App\Http\Controllers\conApprovalController;
use App\Http\Controllers\workAssignController;

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
Route::get('prmail', [prController::class, 'prmail']);
Route::get('leavemail', [leaveController::class, 'leavemail']);
Route::get('conveyancemail', [conveyanceController::class, 'conveyancemail']);
Route::get('prApprovalMail', [prApprovalController::class, 'prApprovalMail']);
Route::get('leaveApprovalMail', [leaveApprovalController::class, 'leaveApprovalMail']);
Route::get('conApprovalMail', [conApprovalController::class, 'conApprovalMail']);
Route::get('workAssign', [workAssignController::class, 'workAssign']);