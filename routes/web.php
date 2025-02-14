<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::name('front.')->prefix(LaravelLocalization::setLocale())->group(function(){
    Route::get('/', function () {
    return view('front.index');})->name('index');

});

// Admin Routes
Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')->group(function(){

    Route::middleware(['auth'])->group(function () {
        
        // -------------------------HOME Page
        Route::get('/', function () {
        return view('admin.index'); })->name('index');

        // -------------------------About Page
        Route::resource('about', AboutController::class)->only(['index', 'edit', 'update']);

        // -------------------------Skills Page
        Route::resource('skills', SkillController::class);

        // -------------------------Services Page
        Route::resource('services', ServiceController::class);
        
        // -------------------------Contace Page
        Route::resource('contact', ContactController::class)->except('store');
        Route::post('contact', [ContactController::class,'store'])->withoutMiddleware('auth')->name('contact.store');
            

            
            });
    
        
    
    require __DIR__.'/auth.php';
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

