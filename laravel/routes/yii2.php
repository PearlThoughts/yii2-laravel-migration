<?php

use Illuminate\Support\Facades\Route;

//...

// Route::domain('frontend.my-project.test')->any('{fallbackPlaceholder}', function () {
//     abort(404);
// })
//     ->middleware(Yii2tech\Illuminate\Http\YiiApplicationMiddleware::class.':legacy/frontend/web/index.php')
//     ->where('fallbackPlaceholder', '.*')
//     ->fallback();

Route::any('{fallbackPlaceholder}', function () {
    abort(404);
})
    ->middleware(Yii2tech\Illuminate\Http\YiiApplicationMiddleware::class.':legacy/backend/web/index.php')
    ->where('fallbackPlaceholder', '.*')
    ->fallback();

// Route::any('{fallbackPlaceholder}', function () {
//     abort(404);
// })
//     ->middleware(Yii2tech\Illuminate\Http\YiiApplicationMiddleware::class.':legacy/api/web/index.php')
//     ->where('fallbackPlaceholder', '.*')
//     ->fallback();