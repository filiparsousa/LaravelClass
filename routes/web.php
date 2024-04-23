<?php

use App\Http\Controllers\EditoraController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//    // return view('auth.login');
//    return view('site.home');
// });


Route::get('/', [NavigationController::class,'home'])->name ('site.home');
Route::get('/contacto', [NavigationController::class,'servicos'])->name ('site.servicos');
Route::get('/galeria', [NavigationController::class,'galeria'])->name ('site.galeria');
Route::get('/servicos', [NavigationController::class,'contacto'])->name ('site.contacto');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


  // ---- rota para os utilizadores-----------
  Route::get('users_index', [UserController::class, 'index'])->name('user.index');
  //  'users_index' - é o que aparece no link, "UserController::class, 'index'" - é o que vai ser executado
  // 'user.index' - é o nome da rota
  Route:: get('users_edit/{id}',[UserController::class,'edit'])->name('user.edit');
  Route:: put('users_update/{id}',[UserController::class,'update'])->name('user.update'); 
  Route:: get('users_delete/{id}',[UserController::class,'delete'])->name('user.delete'); 


  // rota para os sócios 
   Route:: resources([
    // prefixo para aceder às rotas 
    'socio'=>SocioController::class,
    'editora'=>EditoraController::class
]);

  // rota para os socios de um utilizador
  Route::get('/socios_user/{id}', [SocioController::class,'socios_user'])->name('socios.user');

 // Rota para a pagina de confirmação de eliminação de socios
  Route::get('/confirma_delete/{id}', [SocioController::class, 'confirma_delete'])->name('socio.confirma_delete');
  
 //rota para a pagina de confirmção de eliminação das editoras
 Route:: get ('confirma_delete_editora/{id}',[EditoraController::class,'confirma_delete_editora'])->name('editora.confirma_delete_editora');

});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
