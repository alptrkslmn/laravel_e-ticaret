<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;

Route::group(['middleware' => 'sitesetting'], function () {
    Route::get('/', [PageHomeController::class, 'anasayfa'])->name('anasayfa');
    Route::get('/urunler', [PageController::class, 'urunler'])->name('urunler');
    Route::get('/erkek-giyim', [PageController::class, 'urunler'])->name('erkekurunler');
    Route::get('/kadin-giyim', [PageController::class, 'urunler'])->name('kadinurunler');
    Route::get('/cocuk-giyim', [PageController::class, 'urunler'])->name('cocukurunler');
    Route::get('/indirimdekiler', [PageController::class, 'indirimdekiurunler'])->name('indirimdekiurunler');
    Route::get('/urun/detay', [PageController::class, 'urundetay'])->name('urundetay');
    Route::get('/hakkimizda', [PageController::class, 'hakkimizda'])->name('hakkimizda');
    Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');
    Route::post('/iletisim/kaydet', [AjaxController::class, 'iletisimkaydet'])->name('iletisim.kaydet');
    Route::get('/sepet', [PageController::class, 'sepet'])->name('sepet');
});
