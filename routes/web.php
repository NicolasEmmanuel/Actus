<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActusController;
use App\Http\Controllers\DetailActuController;

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



route::get('/' , [ActusController::class ,('index')]);

/* get('/DetailActu' = url / [ActusController::class ,'detail']); = public funtion */

route::get('/detail' , [ActusController::class ,'detail']);
route::get('/detail/{id}' , [ActusController::class ,'detail']);

route::get('/create' , [ActusController::class ,'create']);
route::post('/save' , [ActusController::class ,'save']);




route::get('/modifier/{id}' , [ActusController::class ,'modifier']);
route::post('/update' , [ActusController::class ,'update']);
route::get('/delete/{id}' , [ActusController::class ,'delete']);
