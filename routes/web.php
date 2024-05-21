<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;

Route::get('/', [PageHomeController::class, 'anasayfa'])->name('anasayfa');

Route::get('/urunler', [PageController::class, 'urunler'])->name('urunler');

Route::get('/urun/detay', [PageController::class, 'urundetay'])->name('urundetay');

Route::get('/hakkimizda', [PageController::class, 'hakkimizda'])->name('hakkimizda');

Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');

Route::get('/sepet', [PageController::class, 'sepet'])->name('sepet');
