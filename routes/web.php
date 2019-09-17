<?php

Auth::routes();

Route::get('panel/{any?}', 'PanelController@index')->where('any', '.*')->middleware('auth');