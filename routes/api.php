<?php

Route::group(['middleware' => 'auth'], function () {
    // user
    Route::apiResource('user', 'API\UserController')->only(['index']);
});
