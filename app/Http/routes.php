<?php

$app->get('/', function() use ($app) {
    return view('home');
});
$app->get('/author/', function() use ($app) {
    return view('author');
});
$app->get('blog/', 'App\Http\Controllers\BlogController@index');
$app->get('blog/{uri}', 'App\Http\Controllers\BlogController@details');