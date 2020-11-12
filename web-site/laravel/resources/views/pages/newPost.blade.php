@extends('Layouts/master2')

@section('content')
	<div id="container">
		<div class="container vente" >
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 phar">
					<h2 style="margin-top: 50px; color: white;">Home/Post</h2>
				</div>
				<div class="col-md-3"></div>
				
			</div>
			
		</div>
		<div class="container" style="margin-top: 50px;">
			<div class="row">
				<div class="col-md-offset-3 col-md-7">
	       	         <div class="panel panel-default">
	       		        <div class="panel-heading">
	       			       <div class="panel-title">
			       				<h3 class="contact">Ajouter une nouvelle offre</h3>
			       			</div>
	       			<div class="panel-body">
	       				<form action="">
	       				<div class="form-groupe">
	       					<label for="ofrre">*Offre:</label>
	       					<select class="form-control " id="sel1" required="true" style="width: 600px; ">
                                <option>Location temporaire</option>
                                <option>Location Mensuel</option>
                                <option>Vente</option>
                            </select>
	       				</div>
	       				
	       				<div class="form-inline">
	       					<label for="ofrre">*Type Bien Immobilier:</label>
	       					<select class="form-control " id="sel1" required="true" style="width: 600px; ">
                                <option>Location temporaire</option>
                                <option>Location Mensuel</option>
                                <option>Vente</option>
                            </select>
	       				</div>
	       				<div class="form-group">
	       					<label for="ofrre">*Localisation</label>
	       					<input type="text" id="orangeForm-adresse" placeholder="Ou-est ce que vous vous trouvez ?" class="form-control validate w-500" required="true">
	       				</div>
	       				<div class="form-group">
	       					<label for="ofrre">*Prix du service:</label>
	       					 <input type="tel" id="orangeForm-tel" class="form-control validate w-500" required="true">
	       				</div>

	       				<div class="form-inline">
	       					<button class="btn btn-default"> upload</button>
	       					 <input type="tel" id="orangeForm-tel" class="form-control validate w-500" required="true" style="width: 400px;">
	       					 <button class="btn btn-danger">select file</button>
	       				</div>
	       				<div class="form-group">
	       					<label for="ofrre">*Description:</label>
	       					 <textarea class="form-control h-300" placeholder="faites une description du bien">
	       					 	
	       					 </textarea>
	       				</div>
	       				<div class="form-group">
	       					<div class="row">
	       						<label for="paiement">*Paiement des frais de publication</label> <br>
	       						<span>Orange Money</span>
	       						<input type="radio" name="Orange Money" class="form control">
	       						<span>Tigo Cash</span>
	       						<input type="radio" name="Tigo Cash" class="form control ">

	       						<span>Wave</span>
	       						<input type="radio" name="Wave" class="form control" >
	       					</div>
	       				</div>
	       				</form>
	       				<button class="btn btn-primary " type="submit" style="float: right;">Valider</button>
	       				<button class="btn btn-danger" type="submit" style="float: right;">Annuler</button>
	       			</div>
	       			</div>
	       		</div>
	       	</div>
	       </div>
			</div>
		</div>
		<footer>
        <div class="container">
            <div class="row footer-widgets"> 
                
                <!-- Start Contact Widget -->
                <div class="col-md-4">
                    <div class="footer-widget contact-widget">
                        <h4>Contact Info<span class="head-line"></span></h4>
                        <ul>
                            <li><span>Phone Number:</span> +221 77 250 76 41</li>
                            <li><span>Email:</span> terangaimmob@gmail.com</li>
                            <li><span>Website:</span> www.terangaimmob.com</li>
                        </ul>
                    </div>
                </div>
                <!-- .col-md-3 --> 
                <!-- End Contact Widget --> 
                
                <!-- Start Subscribe & Social Links Widget -->
                <div class="col-md-4">
                    <div class="footer-widget mail-subscribe-widget">
                        <h4>Contactez Nous<span class="head-line"></span></h4>
                        <form class="subscribe">
                            <input type="text" placeholder="mail@example.com">
                            <input type="submit" class="btn-custom" value="Send">
                        </form>
                    </div>
                </div>
                <!-- .col-md-3 --> 
                <!-- End Subscribe & Social Links Widget --> 
                
                <!-- Start Flickr Widget -->
                
                <!-- .col-md-3 --> 
                <!-- End Flickr Widget --> 
                
                <!-- Start Twitter Widget -->
                <div class="col-md-4">
                    <div class="footer-widget social-widget">
                        <h4>Suivez Nous<span class="head-line"></span></h4>
                        <ul class="social-icons">
                            <li> <a class="facebook" href="#"><i class="fa fa-facebook"></i></a> </li>
                            <li> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a> </li>
                            <li> <a class="google" href="#"><i class="fa fa-google-plus"></i></a> </li>
                            <li> <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a> </li>
                            <li> <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a> </li>
                            <li> <a class="flickr" href="#"><i class="fa fa-flickr"></i></a> </li>
                            <li> <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a> </li>
                            <li> <a class="instgram" href="#"><i class="fa fa-instagram"></i></a> </li>
                            <li> <a class="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a> </li>
                            <li> <a class="skype" href="#"><i class="fa fa-skype"></i></a> </li>
                        </ul>
                    </div>
                </div>
                <!-- .col-md-3 --> 
                <!-- End Twitter Widget --> 
                
            </div>
            <!-- row --> 
            
        </div>
        <!-- Start Copyright -->
        <div class="copyright-section">
            <div class="container">
                <div class="col-md-6">
                    <p>&copy; 2020 Téranga - All Rights Reserved </p>
                </div>
                <div class="col-md-6">
                    <ul class="footer-nav">
                        <li><a href="#">Sitemap</a> </li>
                        <li><a href="#">Privacy Policy</a> </li>
                        <li><a href="#">Contact</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Copyright --> 
        
    </footer>
   </div>
@endsection