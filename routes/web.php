<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\WisatadetailsController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\BeritaDashController;
use App\Http\Controllers\WisataDashController;
use App\Http\Controllers\DesaDashController;
use App\Http\Controllers\EditDesaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterDashController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\EditPassController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VisidanMisiController;
use App\Http\Controllers\TupoksiController;
use App\Http\Controllers\StrukturOrgController;
use App\Http\Controllers\MottoController;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactController;






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

Route::get('/', [BerandaController::class, 'index']);

Route::get('/wisata', [WisataController::class, 'index']);

Route::get('/desa', [DesaController::class, 'index']);

Route::get('/wisata-details', [WisatadetailsController::class, 'index']);

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/berita-details/{id}', [BeritaDetailController::class, 'index']);

Route::get('/sejarah', [SejarahController::class, 'index']);

Route::get('/visidanmisi', [VisidanMisiController::class, 'index']);

Route::get('/tupoksi', [TupoksiController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/strukturOrg', [StrukturOrgController::class, 'index']);

Route::get('/motto', [MottoController::class, 'index']);

Route::get('/datapegawai', [DataPegawaiController::class, 'index']);

Route::get('/foto', [FotoController::class, 'index']);

Route::get('/video', [VideoController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/kembali', [LoginController::class, 'kembali']);

Route::get('/dashboard', function(){
    return view('dashboard.admin', [
        "title" => "Dashboard"
    ]);
});

Route::resource('/post', BeritaDashController::class);
Route::get('/editpost/{id}', [BeritaDashController::class, 'edit'])->name('edit');
Route::post('/updatepost/{id}', [BeritaDashController::class, 'update'])->name('update');
Route::get('/berita-details/{id}', [BeritaDashController::class, 'show'])->name('show');

Route::resource('/addwisata', WisataDashController::class);
Route::get('/editwisata/{id}', [WisataDashController::class, 'edit'])->name('edit');
Route::post('/updatewisata/{id}',[WisataDashController::class, 'update'])->name('update');
Route::get('/wisata-details/{id}',[WisataDashController::class, 'show'])->name('show');

Route::resource('/adddesa', DesaDashController::class);
Route::get('/editdesa/{id}', [DesaDashController::class, 'edit'])->name('edit');
Route::post('/updatedesa/{id}', [DesaDashController::class, 'update'])->name('update');

Route::resource('/dashboard/registers', RegisterDashController::class);

Route::resource('/profil', ProfileController::class);
Route::get('/editprofil', [ProfileController::class, 'editprofil'])->name('editprofil');
Route::patch('/updateprofil/{id}', [ProfileController::class, 'updateprofil'])->name('updateprofil');

Route::patch('/updatepass/{id}', [ProfileController::class, 'updatepass'])->name('updatepass');
Route::get('/editpass', [ProfileController::class, 'editpass'])->name('editpass');


Route::post('/addContact', [ContactController::class, 'addContact'])->name('update');


