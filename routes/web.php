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

use App\Models\Immobili;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use App\Models\Photo;

Route::get('/', function () {
    $sql ="SELECT i.id,titolo,descrizione,photo,id_tipologia,id_operazione,sorter,prezzo,mq,
    camere,bagni,vani,indirizzo,provincia,tipologia,operazione  from immobili as i INNER JOIN tipologie
     as t ON i.id_tipologia = t.id INNER JOIN operazioni as o ON i.id_operazione = o.id order by i.sorter asc";

     $res = DB::select($sql);

    return view('welcome',['immobili'=>$res]);
});

Route::get('/immobile/{id}/{descrizione}',function($id){
    $sql ="SELECT i.id,titolo,descrizione,photo,id_tipologia,id_operazione,sorter,prezzo,mq,
    camere,bagni,vani,indirizzo,provincia,prezzo,tipologia,operazione,certificazione  from immobili as i INNER JOIN tipologie
     as t ON i.id_tipologia = t.id INNER JOIN operazioni as o ON i.id_operazione = o.id where i.id=".$id;

     $res = DB::select($sql);
     $sqlPhoto = "select * from photo_immobili where id_immobile=".$id." order by sorter";
     $photo= DB::select($sqlPhoto);
     return view('immobile',['immobile'=>$res[0],'photo'=>$photo]);
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


Route::get('/reorder_immobili', function(Request $request){

    $message = "";
    foreach($request->input('id') as $position=>$id){
       $message.=" elemento id:".$id." posizione".$position;
       $immobile = Immobili::find($id);
       $immobile->sorter = $position;
       $immobile->save();
    }
    return  $message;
    //dd($request->input('id'));
});


Route::get('/vendita', function(){
    return view('vendita');
});


Route::get('/fissaappuntamento', function (Request $request) {

    $miamail = 'mbonanno@remax.it';
    $nome = $request->input('nome');
    $email = $request->input('email');
    $telefono = $request->input('telefono');
    $messaggio = $request->input('messaggio');

    $bodymsg = $nome." , ".$email." , ".$telefono." , ".$messaggio.".";
    $headers = 'From:'.$miamail."\r\n"."Reply-To: ".$miamail;
    mail($miamail,"Messaggio dal sito",$bodymsg,$headers);

    return true;

});

Route::get('/listino', function(){
    $sql ="SELECT i.id,titolo,descrizione,photo,id_tipologia,id_operazione,sorter,prezzo,mq,
    camere,bagni,vani,indirizzo,provincia,tipologia,operazione  from immobili as i INNER JOIN tipologie
     as t ON i.id_tipologia = t.id INNER JOIN operazioni as o ON i.id_operazione = o.id order by i.sorter desc";

     $res = DB::select($sql);

    return view('listino',['immobili'=>$res]);
});

Route::get('/ricerca', function(){
    return view('ricerca');
});

Route::get('/contatto', function(){
    return view('contatto');
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

Route::get('/listino/{id}/add_foto', 'HomeController@addFoto')->middleware('auth');

Route::patch('/save_photo/{id}', 'HomeController@saveFoto')->middleware('auth');

Route::get('/immobili/{id}/edit', 'HomeController@editimmobile')->middleware('auth');

Route::get('/immobili/{id}/delete', 'HomeController@deleteimmobile')->middleware('auth');





