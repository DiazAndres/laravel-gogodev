<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Una sola ruta con middleware
// Route::middleware('example')->get('/', [ExampleController::class, 'index']);
Route::get('/no-access', [ExampleController::class, 'noAccess'])->name('no-access');
Route::get('/example', [ExampleController::class, 'index']);

// Agrupar rutas en un middleware
// Todas las rutas dentro de este grupo tendrán el middleware 'example'
// Se pude poner un array de middlewares para aplicar varios
// Route::middleware(['example', 'auth', 'admin'])->group(function () {
//     Route::get('/example', [ExampleController::class, 'index']);
//     Route::get('/example', [ExampleController::class, 'index']);
//     Route::get('/example', [ExampleController::class, 'index']);
//     Route::get('/example', [ExampleController::class, 'index'])->withoutMiddleware('admin');
//     Route::get('/example', [ExampleController::class, 'index']);
//     Route::get('/example', [ExampleController::class, 'index']);
// });


// !! IMPORTANTE
// Se debe de activar al modelo de user el trait HasApiTokens
// para que funcione el token de autenticación
Route::post('/create', [AuthController::class, 'createUser']);

// Route::post('/create', function () {
//     return response()->json([
//         'status' => true,
//         'message' => 'User created successfully',
//     ], 200);
// });
Route::post('/login', [AuthController::class, 'loginUser']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
