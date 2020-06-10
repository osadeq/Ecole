<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    // mon contrôleur appelé par les routes commençant par '/specialite/...'
	
	// Méthode index appelée par la route '/specialite'
	public function index(){
		// Déterminer la liste des spécialités 
		// et afficher la page d'accueil de gestion des spécialités
		
		//1. sélectionner la liste des spécialités
		$listeSpecialites = [
			1=>["id"=>1, "nom"=>"PHP"],
			2=>["id"=>2, "nom"=>"JAVA"],
			3=>["id"=>3, "nom"=>".NET"],
		];
		
		//dump('ok'); // dump : inspecter le contenu d'une variable
		//dd($listeSpecialites); // dump + die : arrêt du programme
		
		//2. afficher la vue d'accueil de gestion des spécialités
		return view('specialite.sp_liste', [ 'listeSpecialites'=>$listeSpecialites ] );
	}
	
	public function nouveau(){
		//...
		
		return view('specialite.sp_nouveau', []);
	}
}








