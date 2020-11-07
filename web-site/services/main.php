<?php

	if (isset($_POST["email"]) and isset($_POST["password"])) {

		# call websevice for admin authentification

		if($estCorrect)
			include "indexadmin.html";
		else
			include "loginincorrect.html";
	}
	elseif (isset ($_GET["action"])) {

		if ($_GET["action"]=="supprimer") {
			# code...
			$iduser=$_GET["id"];
			#Call websevice for user deletion
		}
		else{

			$iduser=$_GET["id"];
			#show form for editting 
			#Call websevice for user info  edition

		}
	}


?>