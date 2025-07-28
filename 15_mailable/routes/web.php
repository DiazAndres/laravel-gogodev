<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MailController::class, 'index'])->name('mail.index');
Route::get('/send-mail', [MailController::class, 'sendMail'])->name('mail.send');
