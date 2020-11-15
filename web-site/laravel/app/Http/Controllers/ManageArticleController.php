<?php
namespace App\Http\Controllers;

class ManageArticleController extends Controller
{
    
    public function index($action){
    	//appel de la fonction authentifieAdmin()

    	//Fonctions getListArticle()
    	//On lui passe la liste des utilisateurs retournée par getListUser()
        //$articles=getListArticle();
         $articles=array(array('id'=>1,'titre'=>'Le corona aux etatats unis','content'=>'Le corona virus fait des ravages en europe avec des milliers de deces enregistrés','date'=>'11/2/2010'),array('id'=>2,'titre'=>'le ccorona aux etats unis','content'=>'Le corona virus fait des ravages en europe avec des milliers de deces enregistrés','date'=>'11/2/2010'));
            $action='articles';

    	return view('layouts.adminmanagearticles',compact('action','articles'));

    }
    public function edit(){

    	//$estOk=modif($_POST['id'],$_POST['titre'],$_POST['content']);
    	$estOk=1;
        //$data=getArticles();
    	return view('layouts.adminmanagearticles/articles',compact('estOk','datas'));

    }
    public function delete($id){

    	//$estOk=delete($id);
    	$estOk=1;
    	//On lui passe la nouvelle liste d'utilisateur plus le rapport de la supression (estOk) 
                 $articles=array(array('id'=>1,'titre'=>'Le corona aux etatats unis','content'=>'Le corona virus fait des ravages en europe avec des milliers de deces enregistrés','date'=>'11/2/2010'),array('id'=>2,'titre'=>'le ccorona aux etats unis','content'=>'Le corona virus fait des ravages en europe avec des milliers de deces enregistrés','date'=>'11/2/2010'));
            $action='articles';
    	return view('layouts.adminmanagearticles',compact('estOk','action','articles'));

    }
       public function more($id,$contenu){

        //$estOk=delete($_GET['id');
        $estOk=1;
        //On lui passe la nouvelle liste d'utilisateur plus le rapport de la supression (estOk) 
        return view('layouts.more/articles',compact($id,$contenu));

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
    public function deleteCategorie($id){

        //$estOk=delete($id);
        $estOk=1;
        //On lui passe la nouvelle liste d'utilisateur plus le rapport de la supression (estOk) 
        return view('layouts.adminmanagearticles/articles',['estOk'=>1]);

    }
    public function addCategorie(){

        //$estOk=add($_POST['categorie']);
        $estOk=1;
        //On lui passe la nouvelle liste de donnée retournée par getLisUser() pour metttre à jou la vue
        return view('layouts.adminmanagearticles/articles',['estOk'=>1]);

    }
    
    

}