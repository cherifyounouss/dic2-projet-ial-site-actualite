<?php
namespace App\Http\Controllers;

class ManageArticleController extends Controller
{
    
    public function index(){
    	//appel de la fonction authentifieAdmin()

    	//Fonctions getListArticle()
    	//On lui passe la liste des utilisateurs retournée par getListUser()
        //$articles=getListArticle();

    	return view('layouts.adminmanagearticles',compact('choix','articles'));

    }
    public function edit(){

    	//$estOk=modif($_POST['id'],$_POST['titre'],$_POST['content']);
    	$estOk=1;
        //$data=getArticles();
    	return view('layouts.adminmanagearticles/articles',compact('estOk','datas'));

    }
    public function delete(){

    	//$estOk=delete($_GET['id');
    	$estOk=1;
    	//On lui passe la nouvelle liste d'utilisateur plus le rapport de la supression (estOk) 
    	return view('layouts.adminmanagearticles/articles',['estOk'=>1]);

    }
    public function add(){

    	//$estOk=add($_POST['titre'],$_POST['contenu']);
    	$estOk=1;
    	//On lui passe la nouvelle liste de donnée retournée par getLisUser() pour metttre à jou la vue
    	return view('layouts.adminmanagearticles/articles',['estOk'=>1]);

    }

        public function editCategorie(){

        //$estOk=modif($_POST['id'],$_POST['titre'],$_POST['content']);
        $estOk=1;
        //$data=getArticles();
        return view('layouts.adminmanagearticles/articles',compact('estOk','datas'));

    }
    public function deleteCategorie(){

        //$estOk=delete($_GET['id');
        $estOk=1;
        //On lui passe la nouvelle liste d'utilisateur plus le rapport de la supression (estOk) 
        return view('layouts.adminmanagearticles/articles',['estOk'=>1]);

    }
    public function addCategorie(){

        //$estOk=add($_POST['titre'],$_POST['contenu']);
        $estOk=1;
        //On lui passe la nouvelle liste de donnée retournée par getLisUser() pour metttre à jou la vue
        return view('layouts.adminmanagearticles/articles',['estOk'=>1]);

    }
    
    

}