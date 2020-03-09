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

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use App\Models\Photo;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/reorder_gallery', function(Request $request){

    $message = "";
    foreach($request->input('id') as $position=>$id){
       $message.=" elemento id:".$id." posizione".$position;
       $photo = Photo::find($id);
       $photo->sorter = $position;
       $photo->save();
    }
    return  $message;
    //dd($request->input('id'));
});

Route::delete('/delete_photo/{id}','HomeController@deletePhoto')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/immobile/{id}/dettagli','HomeController@dettaglio_immobile')->name('dettagli');

Route::get('/tipologie','HomeController@tipologie')->name('tipologie')->middleware('auth');

Route::get('/tipologie/{id}/edit','HomeController@edittipo')->middleware('auth');

Route::patch('/tipologia_updated/{id}','HomeController@updatetipo')->middleware('auth');

Route::patch('/add_tipologia','HomeController@add_tipologia')->middleware('auth');

Route::patch('/add_operazione','HomeController@add_operazione')->middleware('auth');

Route::get('/operazioni','HomeController@operazioni')->name('operazioni')->middleware('auth');

Route::get('/operazioni/{id}/edit','HomeController@operazioniedit')->middleware('auth');

Route::patch('/operazione_updated/{id}','HomeController@operazione_updated')->middleware('auth');

Route::get('/add_immobile', 'HomeController@add_immobile')->middleware('auth');

Route::patch('/saveimmobile','HomeController@saveimmobile')->middleware('auth');

Route::patch('/updateimmobile/{id}','HomeController@updateimmobile')->middleware('auth');

Route::get('/immobili','HomeController@immobili')->name('immobili')->middleware('auth');

Route::get('/immobile/{id}/add_foto', 'HomeController@addFoto')->middleware('auth');

Route::patch('/save_photo/{id}', 'HomeController@saveFoto')->middleware('auth');

Route::get('/immobili/{id}/edit', 'HomeController@editimmobile')->middleware('auth');

Route::get('/immobili/{id}/delete', 'HomeController@deleteimmobile')->middleware('auth');





