<?php

use Illuminate\Support\Facades\Route;
use App\View\Components\{Card, InputPhone, InputText, TextField};

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
    $card = Card::build()
        ->sections([
            TextField::build()
                ->label('Nombre')
                ->value('Miguel'),
            TextField::build()
                ->label('Apellidos')
                ->value('Lopez Ariza'),
        ])->sections([
            TextField::build()
                ->label('Correo')
                ->value('lopezarizamiguel@gmai.com'),
            TextField::build()
                ->label('Telefono')
                ->value('3015575900'),
            InputText::build()
                ->name('name')
                ->value('Miguel'),
            InputPhone::build()
                ->name('phone')
                ->value('3015575931')
        ])->render();

    return view('welcome', [
        'card' => $card,
    ]);
});
