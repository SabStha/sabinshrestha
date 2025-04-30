<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoadmapController;
use App\Http\Middleware\SetLocale;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', function () {
        return redirect()->route('path.show', ['path' => 'soc']);
    })->name('home');
    Route::get('/path/{path}', [RoadmapController::class, 'showPath'])->name('path.show');
    Route::get('/ajax/path/{path}', [RoadmapController::class, 'getPathContent'])->name('path.content');
});

// Language routes (outside middleware group to avoid infinite redirect)
Route::get('/language/{locale}', [RoadmapController::class, 'changeLanguage'])->name('change.language');
Route::post('/lang/switch', [RoadmapController::class, 'switchLanguage'])->name('lang.switch');