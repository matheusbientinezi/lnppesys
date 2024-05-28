<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/presenca', [App\Http\Controllers\ListaPresencaController::class, 'index'])->middleware(['auth', 'verified'])->name('presenca');
    
    Route::get('/medicao', [App\Http\Controllers\MedicaoController::class, 'index'])->middleware(['auth', 'verified'])->name('medicao');

    Route::post('/insertMedicaoEtapa1', [App\Http\Controllers\MedicaoController::class, 'insertEtapa1'])->middleware(['auth', 'verified'])->name('insert.etapa1');
    Route::post('/insertMedicaoEtapa2', [App\Http\Controllers\MedicaoController::class, 'insertEtapa2'])->middleware(['auth', 'verified'])->name('insert.etapa2');
    Route::post('/insertMedicaoEtapa3', [App\Http\Controllers\MedicaoController::class, 'insertEtapa3'])->middleware(['auth', 'verified'])->name('insert.etapa3');
    Route::post('/insertMedicaoEtapa4', [App\Http\Controllers\MedicaoController::class, 'insertEtapa4'])->middleware(['auth', 'verified'])->name('insert.etapa4');
    Route::post('/insertMedicaoEtapa5', [App\Http\Controllers\MedicaoController::class, 'insertEtapa5'])->middleware(['auth', 'verified'])->name('insert.etapa5');

    Route::post('/insertDadosMedicaoEtapa1', [App\Http\Controllers\MedicaoController::class, 'insertMedicaoEtapa1'])->middleware(['auth', 'verified'])->name('insert.medicao1');
    
    Route::get('/gerarPDFmedicao', [App\Http\Controllers\PdfController::class, 'gerarPDFmedicao' ] )->name('pdf.medicao');

    Route::get('/ranking', [App\Http\Controllers\RankingController::class, 'index'])->name('ranking');
    Route::get('/rankinggeral', [App\Http\Controllers\RankingGeralController::class, 'index'])->name('rankinggeral');

    Route::get('/registrar',function (){
        return view('register');
    })->name('registrar');

    Route::get('/pdfteste',function (){
        return view('pdfteste');
    })->name('pdfmedicao');

});

Route::get('/rankingpublic', [App\Http\Controllers\RankingPublicController::class, 'index'])->name('rankingpublic');
Route::get('/rankinggeralpublic', [App\Http\Controllers\RankingGeralPublicController::class, 'index'])->name('rankinggeralpublic');

require __DIR__.'/auth.php';
