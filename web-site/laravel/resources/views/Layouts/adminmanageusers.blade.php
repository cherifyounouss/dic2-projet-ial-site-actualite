@extends('layouts.master')

@section('content')
    <div id="conte">

        <div class="container ctt">
        	<div class="bajout">
        		<a href="#" class="dmodal " data-toggle="modal" data-target="#addModal"><span class="fa fa-plus btnajout"></span></a>
        	</div>

        	<div class="rowhead">
        		<h2 class="r"> Liste des utilisateurs</h2>
        	</div>

                    <div class="row rluser">
                            <div class="col-md-9 col-xs-7">
                            	<span>N° 1</span><br>
                                <span class="fa fa-user"></span><span>&nbsp  Mamy Ndiaye</span><br>
                                
                            </div>
                            <div class="col-md-3 col-xs-2 actions">
                                <a href="#" class="dmodal2 " data-toggle="modal" data-target="#exampleModal"><span class="fa fa-edit"></span>&nbsp&nbsp&nbsp&nbsp</a>
                                <a href="deleteuser/1"><span class="fa fa-remove"></span></a>
                                <input type="hidden" class="inid" name="iduser" value="1">
                            </div>
                    </div>
                    <div class="row rluser">
                            <div class="col-md-9 col-xs-7">
                            	<span>N° 1</span><br>
                                <span class="fa fa-user"></span><span>&nbsp  Mamy Ndiaye</span><br>
                                
                            </div>
                            <div class="col-md-3 col-xs-2 actions">
                                <a href="#"><span class="fa fa-edit"></span>&nbsp&nbsp&nbsp&nbsp</a>
                                <a href="#"><span class="fa fa-remove"></span></a>
                            </div>
                    </div>




					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Modifier infos utilisateur</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">

		                    <form method="POST" action="useredit">
		                        @csrf
		                        
		                      	<input type="hidden" name="id" value="fjj">
		                        <div class="form-group row">
		                            <label for="email" class="col-md-3 col-form-label text-md-right" >Nouveau login</label>

		                            <div class="col-md-8">
		                                <input id="email" type="email" class="form-control" name="email" placeholder="Vote adresse email" required  autofocus>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="password" class="col-md-3 col-form-label text-md-right">Nouveau mot de passe</label>

		                            <div class="col-md-8">
		                                <input id="password" type="password" class="form-control" name="password1" placeholder="Votre mot de passe" required >

		                                
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label for="password2" class="col-md-3 col-form-label text-md-right">Confirmez mot de passe</label>

		                            <div class="col-md-8">
		                                <input id="password" type="password" class="form-control" name="password" placeholder="Confirmez mot de passe" required >

		                                
		                            </div>
		                        </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
						        <button type="submit" class="btn btn-primary">Enregistrer</button>
						      </div>
						  </form>
						    </div>
						  </div>
						</div>

					<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="addModalLabel">Ajouter utilisateur</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">

		                    <form method="POST" action="adduser">
		                        @csrf
		                        <div class="form-group row">
		                            <label for="nom" class="col-md-3 col-form-label text-md-right" >Prénom</label>

		                            <div class="col-md-8">
		                                <input id="nom" type="text" class="form-control" name="nom" placeholder="Vote Prénom" required  autofocus>
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label for="login" class="col-md-3 col-form-label text-md-right" >Login</label>

		                            <div class="col-md-8">
		                                <input id="nom" type="text" class="form-control" name="login" placeholder="Vote login" required  autofocus>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="password" class="col-md-3 col-form-label text-md-right">Mot de passe</label>

		                            <div class="col-md-8">
		                                <input id="password" type="password" class="form-control" name="password1" placeholder="Votre mot de passe" required >

		                                
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label for="password2" class="col-md-3 col-form-label text-md-right">Confirmez mot de passe</label>

		                            <div class="col-md-8">
		                                <input id="password2" type="password" class="form-control" name="password2" placeholder="Confirmez mot de passe" required >

		                                
		                            </div>
		                        </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
						        <button type="submit" class="btn btn-primary">Enregistrer</button>
						      </div>
						  </form>
						    </div>
						  </div>
						 </div>

        </div>
    </div>

    	@if(isset($estOk))
    	
          @if($estOk)
    		<script type="text/javascript">
    			alert("Opération effectuée avec succés !");
    		</script>
    	  @else
    		<script type="text/javascript">
    			alert("Oups l'opération a échoué, veuillez réessayer utérieurement !");
    		</script>
    	  @endif
    	@endif
    	 
 
@endsection
 