<?php
namespace App\Http\Controllers;

class ConnectController extends Controller
{
    
    public function index(){

    	//call checkAuthentification function()
    	$email=$_POST['email'];
    	$password=$_POST['password'];
    	if(1)
    		return view('Layouts.adminprofile');
    	else
    		return view('logadmin',['estOk',0]);

    }
}