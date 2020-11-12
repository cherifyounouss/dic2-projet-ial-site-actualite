@extends('Layouts/master2')

@section('content')
    <div id="content">
        <div class="container ct">
            <h2>Parametres généraux</h2>
            <div class="listedemande">
                <div class="rowhead">
                    <h3>Informations personnelles</h3> 
                </div>
                <div class=" row rowuser">
                    <div class="col-md-12">
                     <span><b>Prénom et nom : </b></span>&nbsp&nbsp<span>Abdou karim</span>
                 </div>
                            
                </div>
                    
                <div class=" row rowuser2">
                    <div class="col-md-12">
                            <span><b>Téléphone : </b></span>
                            </span><span>&nbsp 77 660 08 40</span>
                         <span class="fa fa-edit bl modify">Modifier</span>
                    </span>
                        
                    </div>
                    <div class="row">
                            <div class="form-group col-md-12 .rowhid fr2">  
                                <label class="edt"><b>Nouveau numéro :</b></label> <input class="inputedit" type="number" name="tel"><br><br>
                                <button class="valid">Valider</button>
                            </div>
                        
                    </div>
                    
                    </div>

                
            </div>
            <div class="identifiants">
                <div class="rowhead">
                    <h3>Identifiants</h3> 
                </div>
                <div class="row rowuserr">
                    <div class="col-md-12 fr2">
                            <span><b>Mot de passe</b></span>
                            </span><span>&nbsp ********</span>
                         <span class="fa fa-edit bl ">Modifier<span><br>
                    </div>
                    <div></div>
                    </div>
                    <div class="row">
                            <div class="form-group col-md-12 fr3">  
                                <label class="edt"><b>Nouveau mot de passe :</b></label> <input class="inputedit" type="number" name="tel"><br><br>
                                <button class="valid">Valider</button>
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