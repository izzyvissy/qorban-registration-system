<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;

Route::get('/', function () {
return ['message' => 'Welcome to the Qorban Registration System API'];
});