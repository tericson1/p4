<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});

##Route::get ('/practice/{n?}', 'PracticeController@index');

Route::get('/debugbar', function () {

    $data = ['foo' => 'bar'];
    Debugbar::info($data);
    Debugbar::info('Current environment: '.App::environment());
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    return 'Just demoing some of the features of Debugbar';
});



Route::get('/env', function () {
    dump(config('app.name'));
    dump(config('app.env'));
    dump(config('app.debug'));
    dump(config('app.url'));
});
//
 Route::get('/balval', 'MoneyController@index');
Route::post('/balval', 'MoneyController@balanceval');


Route::get('/bills', 'MoneyController@index');
Route::post('/bills', 'MoneyController@bills');

Route::get('/incomes', 'MoneyController@index');
Route::post('/incomes', 'MoneyController@incomes');

#Edit Bill
Route::get('/{id}/update', 'MoneyController@edit'); #update
Route::put('/{id}', 'MoneyController@update');

Route::get('/{id}/delete', 'MoneyController@delete');
Route::delete('/{id}', 'MoneyController@remove');



#catgorize bills

Route:: get ('/', 'MoneyController@index');
Route:: get ('/calc', 'BillController@calc');
Route:: get ('/results', 'BillController@results');
Route:: get ('/calculate', 'BillController@calculate');
Route:: get ('/past', 'MoneyController@pastdata');
Route:: get ('/practice', 'MoneyController@practice6');
