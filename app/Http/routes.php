<?php

$app->get('/', function() use ($app) {
    return view('home');
});

$app->get('/author/', function() use ($app) {
    return view('author');
});

$app->get('/book/{chapter}', function($chapter) use ($app) {
    return view('book.' . $chapter);
});

$app->get('/project/', function() use ($app) {
    return view('project');
});

$app->get('/toc/', function() use ($app) {
    return view('toc');
});

$app->get('/buy/', function() use ($app) {
    return view('buy');
});

$app->get('blog/', 'App\Http\Controllers\BlogController@index');
$app->get('blog/{uri}', 'App\Http\Controllers\BlogController@details');