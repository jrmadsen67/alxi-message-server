<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Allocations;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\CountryForm;
use App\Http\Livewire\Countries;
use App\Http\Livewire\DeviceGroups;
use App\Http\Livewire\Devices;
use App\Http\Livewire\MccMncs;
use App\Http\Livewire\Networks;
use App\Http\Livewire\PhysicalLocations;
use App\Http\Livewire\Prefixes;
use App\Http\Livewire\SimCardPlans;
use App\Http\Livewire\SimCards;
use App\Http\Livewire\VirtualLocations;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');


    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/countries', Countries::class)->name('countries');
    Route::get('/networks', Networks::class)->name('networks');
    Route::get('/device-groups', DeviceGroups::class)->name('device-groups');
    Route::get('/devices', Devices::class)->name('devices');
    Route::get('/allocations', Allocations::class)->name('allocations');
    Route::get('/mcc-mncs', MccMncs::class)->name('mcc-mncs');
    Route::get('/physical-locations', PhysicalLocations::class)->name('physical-locations');
    Route::get('/prefixes', Prefixes::class)->name('prefixes');
    Route::get('/sim-card-plans', SimCardPlans::class)->name('sim-card-plans');
    Route::get('/sim-cards', SimCards::class)->name('sim-cards');
    Route::get('/virtual-locations', VirtualLocations::class)->name('virtual-locations');

});
