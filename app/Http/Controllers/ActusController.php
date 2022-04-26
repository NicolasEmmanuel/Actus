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

    /* SELECT * FROM Actu WHERE id = $id ORDER BY id ASC LIMIT:1  */

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
       1/Enregistrement dans ma database.

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

    /* Mise a jour de l'actualité */
    public function update($id=0){


        return back();
    }
}
