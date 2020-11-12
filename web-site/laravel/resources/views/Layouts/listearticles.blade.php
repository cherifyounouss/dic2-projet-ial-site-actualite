    <div id="conte">

        <div class="container ctt">
        	<div class="bajout">
        		<a href="#" class="dmodal " data-toggle="modal" data-target="#addModal"><span class="fa fa-plus btnajout"></span></a>
        	</div>

        	<div class="rowhead">
        		<h2 class="r"> Liste articles</h2>
        	</div>

        	@foreach($articles as $article)

                    <div class="row rluser">
                            <div class="col-md-9 col-xs-7">
                            	<span>Articlie N° {{$article->id}} {{$article->titre}}</span><br>
                                <p class="">{{$article->content}}</p><br>
                                
                            </div>
                            <div class="col-md-3 col-xs-2 actions">
                                <a href="#" class="dmodal2 " data-toggle="modal" data-target="#exampleModal"><span class="fa fa-edit"></span>&nbsp&nbsp&nbsp&nbsp</a>
                                <a href="deletearticle/{{$article->id}}" class="dmodal" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-remove"></span></a>
                                <input type="hidden" class="inid" name="iduser" value="{{$article->id}}">
                            </div>
                    </div>
            @endforeach
 
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Modifier article</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">

		                    <form method="POST" action="articleedit">
		                        @csrf
		                        
		                      	<input type="hidden" name="id" value="fjj">
		                        <div class="form-group row">
		                            <label for="titre" class="col-md-3 col-form-label text-md-right" >Nouveau login</label>

		                            <div class="col-md-8">
		                                <input id="titre" type="text" class="form-control" name="titre" placeholder="Saisir le titre" required  autofocus>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="contenu" class="col-md-3 col-form-label text-md-right">Contenu</label>

		                            <div class="col-md-8">
		                                <input id="contenu" type="text" class="form-control" name="contenu1" placeholder="Votre mot de passe" required >

		                                
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
						        <h5 class="modal-title" id="addModalLabel">Ajouter article</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">

		                    <form method="POST" action="addarticle">
		                        @csrf
		                        <div class="form-group row">
		                            <label for="titre" class="col-md-3 col-form-label text-md-right" >Le titre</label>

		                            <div class="col-md-8">
		                                <input id="titre" type="text" class="form-control" name="titre" placeholder="Le titre" required  autofocus>
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label for="Contenu" class="col-md-3 col-form-label text-md-right" >Contenu</label>

		                            <div class="col-md-8">
		                                <input id="contenu" type="text" class="form-control" name="Contenu" placeholder="Vote Contenu" required  autofocus>
		                            </div>
		                        </div>

		                        <div class="form-group row">
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