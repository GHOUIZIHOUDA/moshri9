<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;
use App\Models\Secteur;
use App\Models\Typeprojet;
use App\Models\Client;
use App\Models\Projet;
use App\Models\Admin;


class RegisterController extends Controller
{
    public function index(){
        $villes = Ville::all();
        $secteurs = Secteur::all();
        $typeprojets = Typeprojet::all();
        return view('pages.register', [
            'ville'=> $villes,
            'secteur'=>$secteurs,
            'typeprojet'=>$typeprojets
        ]);
    }
    public function getvilles(){
        $villes = Ville::all();
        return view('pages.dashville', [
            'ville'=> $villes,
        ]);
    }
    public function getsecteurs(){
        $secteurs = Secteur::all();
        return view('pages.dashsecteur', [
            'secteur'=> $secteurs,
        ]);
    }
    public function addville(Request $request){
        $villes = Ville::create([
        'ville'=>$request->ville,
        'codepostal'=>$request->codepostal,
        ]);
        return redirect()->route('ville')
                        ->with('success','Ville added successfully');
    }
    public function addsecteur(Request $request){
        $secteurs = Secteur::create([
        'secteur'=>$request->secteur,
        ]);
        return redirect()->route('secteur')
                        ->with('success','Secteur added successfully');
    }
    public function save(Request $request){
        $clients = Client::create([
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'email'=>$request->email,
        'password'=>$request->motdepasse,
        'telephone'=>$request->telephone,
        'adresse'=>$request->adresse,
        'descriptionprojet'=>$request->description,
        'ville_id'=>$request->ville
    ]);
        $projets = Projet::create([
        'description'=>$request->description,
        'typeprojet_id'=>$request->typeprojet,
        'secteur_id'=>$request->secteur,
        'client_id'=>$clients->id,
        ]);
        return view('pages.societe');
    }                 

    public function getprojets(){
        $projets = Projet::with(['secteurs','typeprojets','clients.villes'])->get();
        return view('pages.dashboard', [
            'projet'=> $projets,
        ]);
    }

    public function deleteprojet($id)
    {
        Projet::find($id)->delete();
  
        return redirect()->route('dashboard')
                        ->with('success','Projet deleted successfully');
    }
    public function deleteville($id)
    {
        Ville::find($id)->delete();
  
        return redirect()->route('ville')
                        ->with('success','Ville deleted successfully');
    }
    public function deletesecteur($id)
    {
        Secteur::find($id)->delete();
  
        return redirect()->route('secteur')
                        ->with('success','Secteur deleted successfully');
    }

    public function login(){
        $admins = Admin::all();
        if('email'==$request->email && 'password'==$request->password){
            return view('pages.dashboard', [
                'admin'=> $admins,
            ]);
        }
    }

}
