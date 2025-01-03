<?php

use App\Http\Controllers\BayutLocationsController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PfLocationsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Models\BayutLocations;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::redirect('/', '/dashboard');

// Route::get('/', function () {
//     return redirect()->route('dashboard');
// });

Route::get('/dashboard', [PropertyController::class, 'index'])->name('dashboard');
// Route::get('/dashboard', function(){
//     return Inertia::render('Dashboard');
// })->name('dashboard');


// Route::get('/property/view/{id}', [PropertyController::class, 'show'])->name('property.show');
// Route::get('/property/view/{id}', function($id){
//     return Inertia::render('Property/View/Index', [
//         'property' => $id,
//     ]);
// })->name('property.show');


// Route::get('/property/create', [PropertyController::class, 'create'])->name('property.create');
// Route::post('/property/create', [PropertyController::class, 'store'])->name('property.store');

// Route::get('/property/create', function(){
//     return Inertia::render('Property/Create/Index');
// })->name('property.create');

Route::resource('property', PropertyController::class);
Route::get('agent', [OwnerController::class, 'index'])->name('agent');


Route::get('/developer', function () {
    return Inertia::render('Developer/Index');
})->name('developer');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
