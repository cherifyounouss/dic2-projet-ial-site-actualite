    <div id="conte">

        <div class="container ctt">
        	<div class="bajout">
        		<a href="#" class="dmodal " data-toggle="modal" data-target="#addModal"><span class="fa fa-plus btnajout"></span></a>
        	</div>

        	<div class="rowhead">
        		<h2 class="r"> Catégories</h2>
        	</div>

        	@foreach($categories as $categorie)

                    <div class="row rluser">
                            <div class="col-md-9 col-xs-7">

                            	<span>{{$categorie['label']}}</span><br>
                                
                            </div>
                            <div class="col-md-3 col-xs-2 actions">
                                <a href="#" class="dmodal2 " data-toggle="modal" data-target="#exampleModal"><span class="fa fa-edit"></span>&nbsp&nbsp&nbsp&nbsp</a>
                                <a href="/deletecategorie/{{$categorie['id']}}" ><span class="fa fa-remove"></span></a>
                                <input type="hidden" class="inid" name="iduser" value="{{$categorie['id']}}">
                            </div>
                    </div>
            @endforeach




					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Modifier categorie</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">

		                    <form method="POST" action="categorieedit">
		                        @csrf
		                        
		                      	<input type="hidden" name="id" value="fjj">
		                        <div class="form-group row">
		                            <label for="categorie" class="col-md-3 col-form-label text-md-right" >Label</label>

		                            <div class="col-md-8">
		                                <input id="categorie" type="text" class="form-control" name="categorie" placeholder="categorie" required  autofocus>
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
						        <h5 class="modal-title" id="addModalLabel">Ajouter categorie</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">

		                    <form method="POST" action="addcategorie">
		                        @csrf
		                        <div class="form-group row">
		                            <label for="label" class="col-md-3 col-form-label text-md-right" >Label</label>

		                            <div class="col-md-8">
		                                <input id="label" type="text" class="form-control" name="label" placeholder="Label" required  autofocus>
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