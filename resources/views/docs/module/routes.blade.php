@extends('layouts.app')

@section('title')
    Documantation - {{ config('app.page_title') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('docs._sidebar')
            </div>
            <div class="col-md-9">

                <h1>Mage2 E commerce Module Routes</h1>

                <h3># Module Front Routes</h3>

                <p>Open your route <span class="label label-default">web.php</span> file. There is few Route methods which is available.</p>


                <pre class="language-php">/*
  |--------------------------------------------------------------------------
  | Mage2 Hello World Module Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an mage2 hello world modules.
  | It's a breeze. Simply tell mage2 hello world module the URI it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
Route::group(['middleware' => ['web', 'install'], 'namespace' => "Mage2\HelloWorld\Controllers"], function () {

    //Index Route - List of all resources
    Route::get('/hello-world', 'IndexController@index');

    //Create Resources
    Route::get('/hello-world/create', 'IndexController@create');
    Route::post('/hello-world', 'IndexController@store');

    //Update Resources
    Route::get('/hello-world/{id}/edit', 'IndexController@edit');
    Route::put('/hello-world/{id}', 'IndexController@update');

    //Destroy Resources
    Route::delete('/hello-world/{id}', 'IndexController@destroy');
});</pre>

                <h3># Module Admin Routes</h3>

                <p>Once your route <span class="label label-primary">web.php</span> files. There is few Route methods which is available.</p>


                <pre class="language-php">/*
  |--------------------------------------------------------------------------
  | Mage2 Hello World Module Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an mage2 hello world modules.
  | It's a breeze. Simply tell mage2 hello world module the URI it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
Route::group(['middleware' =>
                    ['web', 'adminauth', 'permission', 'install'],
                    'namespace' => "Mage2\HelloWorld\Controllers\Admin"
            ], function () {

    //Index Route - List of all resources
    Route::get('/admin/hello-world', 'IndexController@index');

    //Create Resources
    Route::get('/admin/hello-world/create', 'IndexController@create');
    Route::post('/admin/hello-world', 'IndexController@store');

    //Update Resources
    Route::get('/admin/hello-world/{id}/edit', 'IndexController@edit');
    Route::put('/admin/hello-world/{id}', 'IndexController@update');

    //Destroy Resources
    Route::delete('/admin/hello-world/{id}', 'IndexController@destroy');
});</pre>

            </div>
        </div>
    </div>
    </div>
@endsection
