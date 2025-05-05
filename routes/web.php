<?php

use App\Livewire\Adm\Dashboard as AdmDashboard;
use App\Livewire\Evento\Cestas;
use App\Livewire\Evento\Dashboard;
use App\Livewire\Evento\Entregas;
use App\Livewire\Evento\Instituicoes;
use App\Livewire\Evento\Terreiros;
use App\Livewire\Universal\Banners;
use App\Livewire\Universal\Blocos;
use App\Livewire\Universal\Categorias;
use App\Livewire\Universal\Dashboard as UniversalDashboard;
use App\Livewire\Universal\Igrejas;
use App\Livewire\Universal\Pastores;
use App\Livewire\Universal\Pessoas;
use App\Livewire\Universal\Regiaos;
use App\Livewire\Unp\Grupos;
use App\Livewire\Unp\Cargos;
use App\Livewire\Unp\Cursos;
use App\Livewire\Unp\Dashboard as UnpDashboard;
use App\Livewire\Unp\Formaturas;
use App\Livewire\Unp\Instrutores;
use App\Livewire\Unp\Reeducandos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/documentacao', function () {
    return view('components.documentacao');
})->name('documentacao');

// Rotas Livewire
Route::get('universal/categorias', Categorias::class)->name('categorias');
Route::get('universal/blocos', Blocos::class)->name('blocos');
Route::get('universal/regiaos', Regiaos::class)->name('regiaos');
Route::get('universal/igrejas', Igrejas::class)->name('igrejas');
Route::get('universal/pessoas', Pessoas::class)->name('pessoas');
Route::get('universal/pastores', Pastores::class)->name('pastores');
Route::get('universal/banners', Banners::class)->name('banners');
Route::get('unp/grupos', Grupos::class)->name('grupos');
Route::get('unp/cargos', Cargos::class)->name('cargos');
Route::get('unp/cursos', Cursos::class)->name('cursos');
Route::get('unp/formaturas', Formaturas::class)->name('formaturas');
Route::get('unp/instrutores', Instrutores::class)->name('instrutores');
Route::get('unp/reeducandos', Reeducandos::class)->name('reeducandos');
Route::get('evento/terreiros', Terreiros::class)->name('terreiros');
Route::get('evento/instituicoes', Instituicoes::class)->name('instituicoes');
Route::get('evento/cestas', Cestas::class)->name('cestas');
Route::get('evento/entregas', Entregas::class)->name('entregas');
Route::get('adm/dashboard', AdmDashboard::class)->name('dashboard.adm');
Route::get('evento/dashboard', Dashboard::class)->name('dashboard.ev');
Route::get('unp/dashboard', UnpDashboard::class)->name('dashboard.unp');
Route::get('universal/dashboard', UniversalDashboard::class)->name('dashboard.uni');
