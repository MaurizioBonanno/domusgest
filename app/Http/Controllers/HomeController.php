<?php

namespace App\Http\Controllers;

use App\Models\Operazione;
use App\Models\Tipologia;
use App\Models\Immobili;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function tipologie(){
        $tipologie = Tipologia::orderBy('id','DESC')->get();

        return view('tipologie',['tipologie'=>$tipologie]);
    }

    public function edittipo($id){
       $tipologia = Tipologia::find($id);
       return view('edit_tipo',['tipologia'=>$tipologia]);
    }

    public function updatetipo($id ,Request $req){
       $tipologia = Tipologia::find($id);
       $tipologia->tipologia = request()->input('tipo');
       $res = $tipologia->save();

        $msg = $res ? 'aggiornamento riuscito' : 'qualcosa è andato storto';
        session()->flash('message',$msg);
        return redirect()->route('tipologie');
    }

    public function add_tipologia(Request $req){
        $tipologia = new Tipologia();
        $tipologia->tipologia = request('tipo');
        $tipologia->save();
        //recupero l'ultimo id inserito e lo passo alla risposta
        $res = Tipologia::all()->last()->id;

        return ''.$res;
    }

    public function operazioni(){
        $operazioni = Operazione::orderBy('id','DESC')->get();

        return view('operazioni',['operazioni'=>$operazioni]);
    }

    public function operazioniedit($id){
        $operazione = Operazione::find($id);

        return view('operazione_edit',['operazione'=>$operazione]);
    }

    public function operazione_updated($id, Request $req){
        $operazione = Operazione::find($id);
        $operazione->operazione = request()->input('operazione');
        $res = $operazione->save();

        $msg= $res ? 'Aggiornamento riuscito':'qualcosa è andato storto';
        session()->flash('message',$msg);

        return redirect()->route('operazioni');
    }

    public function add_operazione(Request $req){
        $operazione = new Operazione();
        $operazione->operazione = request('tipo');
        $operazione->save();
        //recupero l'ultimo id inserito e lo passo alla risposta
        $res = Operazione::all()->last()->id;

        return ''.$res;
    }

    public function add_immobile(){
        $operazioni = Operazione::all();
        $tipologie = Tipologia::all();

        return view('add_immobile',['tipologie'=>$tipologie,'operazioni'=>$operazioni]);
    }

    public function saveimmobile(Request $request){

        $immobile = new Immobili();

        $immobile->indirizzo = request()->input('indirizzo');
        $immobile->id_operazione = request()->input('operazione');
        $immobile->titolo = request()->input('titolo');
        $immobile->descrizione = request()->input('descrizione');
        $immobile->id_tipologia = request()->input('tipologia');
        $immobile->mq = request()->input('metri');
        $immobile->bagni = request()->input('bagni');
        $immobile->camere = request()->input('camere');
        $immobile->vani = request()->input('vani');
        $immobile->provincia = request()->input('provincia');
        $immobile->certificazione = request()->input('ace');
        $immobile->prezzo= request()->input('prezzo');

        $file = request()->file('immagine');
        $filename = $file->store(env('ALBUM_THUMB_DIR'));
        $immobile->photo = $filename;

        $immobile->save();

        return redirect()->route('immobili');


    }

    public function updateimmobile($id, Request $request){

        $immobile = Immobili::find($id);

        $immobile->indirizzo = request()->input('indirizzo');
        $immobile->id_operazione = request()->input('operazione');
        $immobile->titolo = request()->input('titolo');
        $immobile->descrizione = request()->input('descrizione');
        $immobile->id_tipologia = request()->input('tipologia');
        $immobile->mq = request()->input('metri');
        $immobile->bagni = request()->input('bagni');
        $immobile->camere = request()->input('camere');
        $immobile->vani = request()->input('vani');
        $immobile->provincia = request()->input('provincia');
        $immobile->certificazione = request()->input('ace');
        $immobile->prezzo= request()->input('prezzo');

        $file = request()->file('immagine');
        if($file){
        $filename = $file->store(env('ALBUM_THUMB_DIR'));
        $immobile->photo = $filename;
        }


        $immobile->save();

        return redirect()->route('immobili');


    }

    public function deleteimmobile($id){
        $immobile = Immobili::find($id);
        //recupero e cancello le foto
        $sql = " select * from photo_immobili where id_immobile=".$id;
        $res = DB::select($sql);
        foreach($res as $photo){
            $img = Photo::find($photo->id);
            $path = $img->path;
            Storage::disk('public')->delete($path);
            $img->delete();
        }
        $img = $immobile->photo;
        $res = $immobile->delete();
        Storage::disk('public')->delete($img);
        return redirect('/immobili');
    }

    public function immobili(){
        $sql ="SELECT i.id,titolo,descrizione,photo,id_tipologia,id_operazione,sorter,prezzo,mq,
        camere,bagni,vani,indirizzo,provincia,tipologia,operazione  from immobili as i INNER JOIN tipologie
         as t ON i.id_tipologia = t.id INNER JOIN operazioni as o ON i.id_operazione = o.id order by i.sorter desc";

         $res = DB::select($sql);

        return view('list_immobili',['immobili'=>$res]);
    }

    public function dettaglio_immobile($id){
        $sql ="SELECT i.id,titolo,descrizione,photo,id_tipologia,id_operazione,sorter,prezzo,mq,
        camere,bagni,vani,indirizzo,provincia,prezzo,tipologia,operazione,certificazione  from immobili as i INNER JOIN tipologie
         as t ON i.id_tipologia = t.id INNER JOIN operazioni as o ON i.id_operazione = o.id where i.id=".$id;

         $res = DB::select($sql);

         return view('dettaglio',['immobile'=>$res[0]]);
    }

    public function addFoto($id){
        $sql = "select * from photo_immobili where id_immobile=".$id." order by sorter asc";
        $res = DB::select($sql);
       // dd($res);
        return view('add_foto',['id'=>$id, 'images'=>$res]);
    }

    public function saveFoto($id, Request $request){
         foreach($request->file('immagine') as $file){
            $photo = new Photo();
            $photo->id_immobile = $id;
            $filename = $file->store(env('ALBUM_THUMB_DIR'));
            $photo->path= $filename;
            $photo->save();


         }

         return redirect('/immobile/'.$photo->id_immobile.'/add_foto');
    }

    public function reordergallery(Request $request){

       dd(request()->input('ids'));

    }

    public function deletePhoto($id){
        $photo = Photo::find($id);
        $path = $photo->path;
        Storage::disk('public')->delete($path);
        $res = $photo->delete();

        return ''.$res;
    }

    public function editimmobile($id){
        $immobile = Immobili::find($id);
        $operazioni = Operazione::all();
        $tipologie = Tipologia::all();
        return view('edit_immobile',['immobile'=>$immobile,'tipologie'=>$tipologie,'operazioni'=>$operazioni]);
    }
}
