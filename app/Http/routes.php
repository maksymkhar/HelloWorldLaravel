<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\HolaMon;
use Illuminate\Http\Response;

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', function () {

    echo "Caracola hola hola!";

});

Route::get('/helloworld2', function () {


    $model = new HolaMon();

    $data["hola"] = $model->getString();

    return view('helloworld', $data);


});*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/helloworld',"HolaMonController@hello");

Route::resource('/user', "UserController");

Route::get('/prova1', function () {
    return '<h1>Hello World</h1>';
});

Route::post('/prova1', function () {

    return '<h1>Hello World</h1>';
});

Route::get('/prova2', function () {

    $content = '<h1>Hello World</h1>';
    $status = 200;
    $contentType = 'text/html';
    return (new Response($content, $status))
        ->header('Content-Type', $contentType);
});

Route::get('/prova3', function () {

    $content = '<h1>Hello World</h1>';
    $status = 200;
    $contentType = 'text/plain';
    return (new Response($content, $status))
        ->header('Content-Type', $contentType)
        ->header('MyHeader', 'HOLA!!');
});

Route::get('/prova4', function () {

    $pathToFile = public_path('prova.pdf');
    // dd($pathToFile); <- Util per a depurar, atura i imprimeix.
    return response()->download($pathToFile);
});

Route::get('/prova5', function () {

    $jsonData = ['valueA' => 'value1', 'valueB' => 'value3'];
    return response()->json($jsonData);
});

Route::get('/prova6', function () {

    return redirect('http://www.google.es');
});


