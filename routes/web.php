<?php

use Illuminate\Support\Facades\Route;

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

//UTILISER DES VUES COMME REPONSE

Route::get( '/', function(){
	return view('accueil'); //type réponse: une vue dans le fichier accueil.blade.php
});

//PASSER DES VARIABLES AUX CONTROLEUR

Route::get('/specialite',  'SpecialiteController@index');

Route::get('/specialite/nouveau',	'SpecialiteController@nouveau');

//Route::get('/specialite/ajouter',  'SpecialiteController@ajouter');
//Route::get('/specialite/editer',  'SpecialiteController@editer');
//Route::get('/specialite/enregistrer',  'SpecialiteController@enregistrer');
//Route::get('/specialite/demanderSupprimer',  'SpecialiteController@demanderSupprimer');
//Route::get('/specialite/supprimer',  'SpecialiteController@supprimer');



















// Route vers la page page1.blade.php
Route::get('/page1', function(){
	// variables à transmettre à la vue
	$var1 = "ok";
	$var2 = "Bienvenue";
	$listeJours = [ "Lundi", "Mardi", "Mercredi" ];
	
	return view('page1', 
	[
			'var1'=>$var1, 
			'var2'=>$var2,
			'listeJours'=>$listeJours,
	]);
});

// route vers page2.blade.php
Route::get('/page2', function(){
	return view('page2');
});

// route vers page3.blade.php
Route::get('/page3', function(){
	return view('page3')->name('page3'); //vue avec nom de route pour pouvoir utiliser return redirect()->route('nom de route'). Cette fonction de redirection permet d'afficher la vue à partir d'une fonction.
});

// route qui redirige vers la route nommée 'page3'
Route::get('/page4', function(){
	return redirect()->route('page3'); 
});

// route qui fait des choses puis réaffiche la vue qui l'a appelé (par exemple un formulaire qui retourne à lui même après un contrôle négatif des données envoyées)
Route::get('/user/ajouter', function(Request $request){
	//... validation des données d'un formulaire et si erreurs on return back()
	$erreurs = validerUser($request); //une fonction qui valide les données user et qui retourne la liste d'erreurs
	if ($erreurs == null){
		// enregistrer les données du formulaire ...
		enregistrerUser($request); // une fonction qui enregistre les données user
	}
	
	if ($erreurs != null) {
		return back(['erreurs',$erreurs]); 
	}
	else {
		return view('acceuil', ['succes'=>'Données enregistrées']);
	}
});
	
	
	
	
	
	
	
	
	
	
	
	
	
