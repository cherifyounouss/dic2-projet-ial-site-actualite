<?php
namespace App\Http\Controllers;

class ManageUserController extends Controller
{
    
    public function index(){

    	//Fonctions getListUser()
    	//On lui passe la liste des utilisateurs retournée par getListUser()

    	return view('layouts.adminmanageusers');

    }
    public function editUser(){

    	//$estOk=modif($_POST['id'],$_POST['login'],$_POST['password']);
    	$estOk=1;
    	return view('layouts.adminmanageusers',['estOk'=>1]);

    }
    public function deleteUser(){

    	//$estOk=delete($_GET['id');
    	$estOk=1;
    	//On lui passe la nouvelle liste d'utilisateur plus le rapport de la supression (estOk) 
    	return view('layouts.adminmanageusers',['estOk'=>1]);

    }
    public function addUser(){

    	//$estOk=add($_POST['nom'],$_POST['login'],$_POST['password'],);
    	$estOk=1;
    	//On lui passe la nouvelle liste de donnée retournée par getLisUser() pour metttre à jou la vue
    	return view('layouts.adminmanageusers',['estOk'=>1]);

    }
    

}