<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacancyController;


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

Route::get('/', [VacancyController::class, 'indexPreview'])->name('main');
Route::get('/vacancies', [VacancyController::class, 'indexVacancy'])->name('vacancies');
Route::get('/probation', [VacancyController::class, 'indexProbation'])->name('probation');
Route::get('/vacancies/{id}', [VacancyController::class, 'show'])->name('vacancies.item');
Route::get('/probation/{id}', [VacancyController::class, 'show'])->name('probation.item');

Route::group(
    [
        'middleware' => ['auth']
    ],
    function () {
        Route::get('/statements/create/{vacancy_id}', [StatementController::class, 'create'])->middleware('auth')->name('statement.create');
        Route::get('/statements', [StatementController::class, 'show'])->middleware('auth')->name('statement');
        Route::post('/statements/create/{vacancy_id}/submit', [StatementController::class, 'store'])->middleware('auth')->name('statement.store');
        Route::get('/statements/update/{id}', [StatementController::class, 'edit'])->middleware('auth')->name('statement.edit');
        Route::post('/statements/update/{id}/submit', [StatementController::class, 'update'])->middleware('auth')->name('statement.update');
        Route::get('/statements/update/{id}/delete', [StatementController::class, 'destroy'])->middleware('auth')->name('statement.destroy');
        
        Route::get('/personalarea', [UserController::class, 'show'])->middleware('auth')->name('personal.area');
    }

);

require __DIR__ . '/auth.php';
