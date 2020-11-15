<?php
namespace App\Http\Controllers;

class ArticlesController extends Controller
{
    
    public function index($action){

    	//call checkAuthentification function()
    	if($action=='categories'){
    		//call methode which return all categories
    		$categories=[['id'=>1,'label'=>'jounal'],['id'=>2,'label'=>'divers']];
    		$action='categories';
    		return view('Layouts.adminmanagearticles',compact('action','categories'));
    	}
    	else{
    		//ce sont des articles
    		$articles=array(array('id'=>1,'titre'=>'Le corona aux etatats unis','content'=>'Le corona virus fait des ravages en europe avec des milliers de deces enregistrés','date'=>'11/2/2010'),array('id'=>2,'titre'=>'le ccorona aux etats unis','content'=>'Le corona virus fait des ravages en europe avec des milliers de deces enregistrés','date'=>'11/2/2010'));
    		$action='articles';

    		return view('Layouts.adminmanagearticles',compact('action','articles'));
    	}

    }
}