<?php

use App\Http\Controllers\AvatarController;
use Illuminate\Support\Facades\Route;

Route::get('avatar/output/', [AvatarController::class, 'outputImage']);
