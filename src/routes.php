<?php

Route::group(['middleware' => config('menu.middleware')], function () {
    $path = rtrim(config('menu.route_path'));
    Route::post($path.'/addcustommenu',
        ['as' => 'haddcustommenu', 'uses' => '\Harimayco\Menu\Controllers\MenuController@addcustommenu']);
    Route::post($path.'/deleteitemmenu',
        ['as' => 'hdeleteitemmenu', 'uses' => '\Harimayco\Menu\Controllers\MenuController@deleteitemmenu']);
    Route::post($path.'/deletemenug',
        ['as' => 'hdeletemenug', 'uses' => '\Harimayco\Menu\Controllers\MenuController@deletemenug']);
    Route::post($path.'/createnewmenu',
        ['as' => 'hcreatenewmenu', 'uses' => '\Harimayco\Menu\Controllers\MenuController@createnewmenu']);
    Route::post($path.'/generatemenucontrol',
        ['as' => 'hgeneratemenucontrol', 'uses' => '\Harimayco\Menu\Controllers\MenuController@generatemenucontrol']);
    Route::post($path.'/updateitem',
        ['as' => 'hupdateitem', 'uses' => '\Harimayco\Menu\Controllers\MenuController@updateitem']);
});
