<?php


use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\AuthController;
use  App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
})->name('welcom');
Route::get('/c', function () {
    return view('Partie.Services.Contact');
})->name('contact');

Route::get('/Actualit1', function () {
    return view('Partie.Actualites.Actualit1');
})->name('Actualit1');

Route::get('/Actualit2', function () {
    return view('Partie.Actualites.Actualit2');
})->name('Actualit2');
Route::get('/Actualit3', function () {
    return view('Partie.Actualites.Actualit3');
})->name('Actualit3');
Route::get('/serviceclient', function () {
    return view('Partie.Services.Serviceclient');
})->name('Serviceclient');

Route::get('/serviceescale', function () {
    return view('Partie.Services.Serviceescale');
})->name('Serviceescale');
Route::get('/serviceTracabilite', function () {
    return view('Partie.Services.ServiceTracabilite');
})->name('ServiceTracabilite');




Route::get('/admin' ,[HomeController::class,'index']);
//registration
Route::get('registration', [AuthController::class, 'registration'])->name('registration');
Route::post('registration_post',[AuthController::class,'registration_post'])->name('registration_post');
//login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login_post', [AuthController::class,'login_post'])->name('login_post');

Route::group(['middleware'=> 'Chef'],function(){
    Route::get('chef/dashboard',[DashboardController::class,'dashboard']);

});
Route::group(['middleware'=> 'Client'],function(){
    Route::get('Client/dashboard',[DashboardController::class,'dashboard']);

});
Route::group(['middleware'=> 'Agentmaritime'],function(){
    Route::get('Agentmaritime/dashboard',[DashboardController::class,'dashboard']);

});
// compteclient
Route::get('/info', function () {
    return view('Client.info');
})->name('info');
Route::get('Etat', function () {
    return view('Client.Etat');
})->name('Etat');
// compteAgentmaritime
Route::get('/demande', function () {
    return view('Agentmaritime.demande');
})->name('demande');



