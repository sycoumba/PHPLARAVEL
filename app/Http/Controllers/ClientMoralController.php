<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientMoralController extends Controller
{
    //

public function add()
{
    return view('clientmoral.add');
}

public function persist(Request $request)
{
    $clientmoral = new ClientMoralController();

    /*$clientmoral->nom_entreprise = $request->nom_entreprise;
    $clientmoral->adresse_entreprise = $request->adresse_entreprise;
    $clientmoral->telephone = $request->telephone;
    $clientmoral->email = $request->email;
    $clientmoral->type_entreprise = $request->type_entreprise;
    $clientmoral->raison_social = $request->raison_social;
    $clientmoral->identifiant_entreprise = $request->identifiant_entreprise;
    */
    $result = DB::table('client_moral')->insert([
        'nom_entreprise'=>$request->nom_entreprise,
        'adresse_entreprise'=>$request->adresse_entreprise,
        'telephone'=>$request->telephone,
        'email'=>$request->email,
        'type_entreprise'=>$request->type_entreprise,
        'raison_social'=>$request->raison_social,
        'identifiant_entreprise' =>$request->identifiant_entreprise,
    ]);
    return redirect('/clientmoral')->with(['confirmation'=>$result]);
}
}