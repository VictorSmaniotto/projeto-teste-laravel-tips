<?php

use App\Models\Plan;
use App\Enums\SignatureStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignatureController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/test', function(){

    // // consigo criar um comando de inclusão
    // $plan = Plan::create([
    //     'name' => 'Last Plan',
    //     'short_description' => 'A terrible plan',
    //     'price' => 2990
    // ]);

    // // consigo utilizar o usuario autenticado e chamar o relacionamento para criar um client
    // $client = Auth::user()->client()->create([
    //     'document' => '10010019876',
    //     'bithdate' => '1998-07-24'
    // ]);

    // // consigo incluir um status chamando diretamente o enum
    // $client->signatures()->create([
    //     'plan_id' => $plan->id,
    //     'status' => SignatureStatus::ACTIVE
    // ]);

    // posso chamar view passando o nome que está na raiz da pasta views
    // posso utilizar diretorio.arquivo para ser mais especifico

    return view('test');
});

Route::get('teste', [SignatureController::class, 'index']);