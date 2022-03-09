<?php

namespace Routes;

use Illuminate\Support\Facades\Route;

class BaseRoute
{
    public static function CRUD($class, $model)
    {
        $modelName = '/' . $model . '/';
        Route::post($modelName . 'store', [$class, 'store']);
        Route::put($modelName . 'update/{id}', [$class, 'update']);
        Route::get($modelName . 'show/{id}', [$class, 'show']);
        Route::post($modelName . 'delete/{id}', [$class, 'delete']);
        Route::get($modelName, [$class, 'showAllRecords']);
        Route::get($modelName . 'search/{data}/{getBy}', [$class, 'search']);
    }
}
