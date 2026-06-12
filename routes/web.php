<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\BillingDetailController;
use App\Http\Controllers\Example\AnimalController;
use App\Http\Controllers\Example\CategoryController;
use App\Http\Controllers\Example\PostController;
use App\Http\Controllers\Example\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CarrerController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\DentistController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\TreatmentTypeController;
use App\Livewire\Products\ProductList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    //rutas de ejemplo sin controlador con prefijo
    Route::prefix('/ejemplo')->group(function () {
        Route::get('/index', fn() => view('examples.ejemplo.index'))->name('ejemplo.index');
        Route::get('/create', fn() => view('examples.ejemplo.create'))->name('ejemplo.create');
        Route::get('/edit', fn() => view('examples.ejemplo.edit'))->name('ejemplo.edit');
        Route::get('/show', fn() => view('examples.ejemplo.show'))->name('ejemplo.show');
    });

    //rutas con controlador y prefix
    Route::prefix('/categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
    });

    Route::prefix('/posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('posts.index');
        Route::get('/create', [PostController::class, 'create'])->name('posts.create');
        Route::post('/', [PostController::class, 'store'])->name('posts.store');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::put('/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
        Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
    });

    Route::prefix('/animals')->group(function () {
        Route::get('/', [AnimalController::class, 'index'])->name('animals.index');
        Route::get('/create', [AnimalController::class, 'create'])->name('animals.create');
        Route::post('/', [AnimalController::class, 'store'])->name('animals.store');
        Route::get('/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
        Route::put('/{animal}', [AnimalController::class, 'update'])->name('animals.update');
        Route::delete('/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');
        Route::get('/{animal}', [AnimalController::class, 'show'])->name('animals.show');
    });

    //rutas de posts de tipo resource
    Route::resource('/students', StudentController::class);
    Route::resource('/carrers', CarrerController::class);

    // Route::resource('/categories', CategoryController::class);
    // Route::resource('/animals', AnimalController::class);

    Route::resource('billings', BillingController::class);
    Route::resource('billingsdetails', BillingDetailController::class);
    Route::resource('dates', DateController::class);
    Route::resource('dentists', DentistController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('paymentstypes', PaymentTypeController::class);
    Route::resource('records', RecordController::class);
    Route::resource('treatments', TreatmentController::class);
    Route::resource('treatments_types', TreatmentTypeController::class);
});

//  Route:: "middleware" y "prefix" se utilizan para organizar las rutas (URI)
//  aplicar seguridad y estructurar URLs mediante grupos de rutas
//  Middleware: Verifica si el usuario está autenticado (auth) comprobando sus permisos por medio del rol
//  Prefix: Se utiliza para agrupar rutas que comparten un prefijo de URL en común

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class,'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



require __DIR__ . '/auth.php';
