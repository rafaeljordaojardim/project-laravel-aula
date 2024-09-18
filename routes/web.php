<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_usuario', [UserController::class, "formCriarUsuario"]);

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);

// Rotas produto
Route::get('/cadastro_produto', [ProdutoController::class, "formCriarProduto"]);

Route::post('/criar_produto', [ProdutoController::class, 'criar']);

Route::get('/listar_produtos', [ProdutoController::class, 'listar']);