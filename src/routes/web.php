<?php
  // Route::get('video', 'VideoController@index');
  Route::group([
    'prefix' => 'video', // Must match its `slug` record in the DB > `data_types`
    'middleware' => ['web'],
    //'as' => 'video.video.',
    'namespace' => '\Krts\Video\Http\Controllers'
  ], function () {
    Route::get('/', ['uses' => 'PostController@getPosts', 'as' => 'list']);
    Route::get('{slug}', ['uses' => 'PostController@getPost', 'as' => 'post']);
});

