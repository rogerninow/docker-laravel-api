<?php

namespace App\Routes\Base;

use App\Http\Controllers\ApiController;
use App\Routes\IRouter;
use Illuminate\Support\Facades\Route;

class BaseRouter implements IRouter
{
    public function createRoutes() : void
    {
        Route::prefix('api')->middleware('auth:api')->group(static function () {
            Route::get('/base', ApiController::class . '@index')->name('api.base');
        });

        Route::get('/unauthorized', static function () {
            return response('unauthorized', 401);
        })->name('login');
    }
}
