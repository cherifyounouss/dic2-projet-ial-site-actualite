<?php
namespace App\Http\Controllers;

class ArticleController extends Controller
{
    
    public function index(){

    	//call checkAuthentification function()
    	if($action=='categories'){
    		//call methode which return all categories
    		$allcategories=['jounal','divers','metos'];
    		$action='categories';
    		return view('Layouts.adminmanagearticles',compact('action','categories'));
    	}
    	else{
    		//ce sont des articles
    		$articles=[['id'=>1,'content'=>'Le corona virus fait des ravages en europe avec des milliers de deces enregistrés','date'=>'11/2/2010'],['id'=>2,'content'=>'Le corona virus fait des ravages en europe avec des milliers de deces enregistrés','date'=>'11/2/2010']];
    		$action='articles';
    		return view('Layouts.adminmanagearticles',compact('action'),'articles');
    	}

    }
}