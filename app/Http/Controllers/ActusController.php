<?php

namespace App\Http\Controllers;

use view;
use App\Models\Actualite;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ActusController extends Controller
{
    //
    public function index(){
        $actualites = Actualite::all();/* Recupere toutes les informations de la database pour l'injecté dans $actualites*/
        return view('Actus' , compact('actualites'));
    }

    public function detail($id=0){ /*Reçois l'id  */

    $actu = Actualite::where("id" , $id)-> first();/* Selectionne l'actualité portant l'identifiant $id*/
    /*Meme chose en requete SQL : SELECT * FROM Actu WHERE id = $id ORDER BY id ASC LIMIT:1  */

        return view('DetailActu' , compact('actu'));

       
    }

    public function create(){

        return view('create');
    }

    public function save(Request $request ){/* Add database */
        /* dd($request); */
        $validates = $request ->validate([
                                            "titre" =>"required",
                                            "detail"=>"required"
                                        ]);

       /*  dd($validates); */ /*Enregistrement dans ma database  */
       /** 
       Enregistrement dans ma database.

       1/Creation de mon instance

       2/Création de mon instance d'enregistrement a l'aide de mon model "Actualite".

       3/Affectation de mes variables "request" à mon enregistrement.

       4/enregistrement en database.
       **
       *************************************/

       $SaveActualite = new Actualite();
       $SaveActualite -> titre  = $request -> titre;
       $SaveActualite -> detail = $request -> detail;
       $SaveActualite -> save();

       return back();/* Redirection vers ma page de formulaire */
    }

    
    
    /* Modification  de l'actualité */
    public function modifier($id=0){
        $actu = Actualite::where("id" , $id)-> first();/* Selectionne l'actualité portant l'identifiant $id*/

        return view('modifier', compact('actu'));
    }

    
    public function update(Request $request){

        $validates = $request ->validate([
                                            "id"   =>"required",
                                            "titre"=>"required"
                                         ]);


            $Update = Actualite::find($request -> id);
            $Update->titre  = $request->titre;
            $Update->detail = $request->detail;
            $Update->save();

            return back();/* Redirection vers ma page de formulaire */
    }

    public function delete($id=0){

        $delete = Actualite::find($id);
        $delete->delete();

        return back();
    }
}
