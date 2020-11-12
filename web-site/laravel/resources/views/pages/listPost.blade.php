@extends('Layouts/master')

@section('content')
	<div id="container">
	<div class="container vente" >
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 phar">
				<h2>Vendre en toute confiance</h2>
			</div>
			<div class="col-md-3"></div>
			
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form role="search" name="searchform" method="get">
					<div class="col-sm-8">
            	<div class="form-group">
                <div class="input-group">
                    <input type="text" placeholder="Estimez votre bien" name="recherche" class="form-control left-rounded search">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary right-rounded search">
                        	<span class="fa fa-search">Chercher un bien</span>
                        </button>
                    </div>
                </div>
            </div>
				</form>
			</div>
			
			
		</div>
	</div>
	<div id="content">
            <div class="container" style="margin-top: 50px;">
                <div class="row portfolio-page">

                    <!-- Start Portfolio Filter -->
                     <h4 class="title"><span>Voir les annonces disponibles</span></h4>
                    <!-- End Portfolio Filter -->

                    <!-- Start Portfolio Items -->
                    <div id="portfolio" class="portfolio-3">

                        <!-- Start Portfolio Item -->
                        <div class="portfolio-item web drawing col-md-4">
                            <div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a  title="This is an image title" href="images/portfolio/portfolio_2_1@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/1.jpg" />
                                    </a>
                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="{{ route('details') }}">
                                        <h4>A vendre</h4>
                                        <span>Localite:Km-50</span>
                                        <span>Prix:1200£</span>
                                        <button class="btn btn-success" type="submit" >Details</button>
                                    </a>
                                     
                                </div>
                                <!-- End Portfolio Item Details -->
                            </div>
                        </div>
                        <!-- End Portfolio Item -->

                        <!-- Start Portfolio Item -->
                        <div class="portfolio-item logo animation col-md-4">
                            <div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_2@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/2.jpg" />
                                    </a>
                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4>A vendre</h4>
                                        <span>Localite:Mermose</span>
                                        <span>Prix:30.000£</span>
                                        <button class="btn btn-success" type="submit">Details</button>
                                    </a>
                                    
                                </div>
                                <!-- End Portfolio Item Details -->
                            </div>
                        </div>
                        <!-- End Portfolio Item -->

                        <!-- Start Portfolio Item -->
                        <div class="portfolio-item drawing col-md-4">
                            <div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_3@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/3.jpg" />
                                    </a>
                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4>A vendre</h4>
                                        <span>Localite:Mermose</span>
                                        <span>Prix:30.000£</span>
                                        <button class="btn btn-success" type="submit">Details</button>
                                    </a>
                                   
                                  
                                     
                                </div>
                                <!-- End Portfolio Item Details -->
                            </div>
                        </div>
                        <!-- End Portfolio Item -->

                        <!-- Start Portfolio Item -->
                        <div class="portfolio-item web ilustration col-md-4">
                            <div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_4@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/4.jpg" />
                                    </a>
                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4>A vendre</h4>
                                        <span>Localite:Mermose</span>
                                        <span>Prix:30.000£</span>
                                    </a>
                                    
                                    </a>
                                    <button class="btn btn-success" type="submit">Details</button>
                                </div>
                                <!-- End Portfolio Item Details -->
                            </div>
                        </div>
                        <!-- End Portfolio Item -->

                        <!-- Start Portfolio Item -->
                        <div class="portfolio-item logo drawing col-md-4">
                            <div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_5@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/5.jpg" />
                                    </a>
                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4>A vendre</h4>
                                        <span>Localite:Almadies</span>
                                        <span>Prix:10.000£</span>
                                    </a>
                                </div>
                                 <button class="btn btn-success" type="submit">Details</button>
                                <!-- End Portfolio Item Details -->
                            </div>
                        </div>
                        <!-- End Portfolio Item -->

                        <!-- Start Portfolio Item -->
                        <div class="portfolio-item animation col-md-4">
                            <div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_6@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/6.jpg" />
                                    </a>
                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                       <h4>A vendre</h4>
                                        <span>Localite:Mermose</span>
                                        <span>Prix:30.000£</span>
                                         <button class="btn btn-success" type="submit">Details</button>
                                    </a>
                                   
                                </div>
                                <!-- End Portfolio Item Details -->
                            </div>
                        </div>
                        <!-- End Portfolio Item -->

                        <!-- Start Portfolio Item -->
                        <div class="portfolio-item web col-md-4">
                            <div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_7@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/7.jpg" />
                                    </a>
                                    
                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4>A vendre</h4>
                                        <span>Localite:Mermose</span>
                                        <span>Prix:30.000£</span>
                                    </a>
                                     <button class="btn btn-success" type="submit">Details</button>
                                </div>
                                <!-- End Portfolio Item Details -->
                            </div>
                        </div>
                        <!-- End Portfolio Item -->

                        <!-- Start Portfolio Item -->
                        <div class="portfolio-item logo ilustration animation col-md-4">
                            <div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_8@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/8.jpg" />
                                    </a>

                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                       <h4>A vendre</h4>
                                        <span>Localite:Mermose</span>
                                        <span>Prix:30.000£</span>
                                         <button class="btn btn-success" type="submit">Details</button>
                                    </a>
                                </div>
                                <!-- End Portfolio Item Details -->
                            </div>
                        </div>
                        <!-- End Portfolio Item -->

                        <!-- Start Portfolio Item -->
                        <div class="portfolio-item logo ilustration animation col-md-4">
                            <div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_9@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/9.jpg" />
                                    </a>
                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4>A vendre</h4>
                                        <span>Localite:Mermose</span>
                                        <span>Prix:30.000£</span>
                                         <button class="btn btn-success" type="submit">Details</button>
                                    </a>
                                </div>
                                <!-- End Portfolio Item Details -->
                            </div>
                        </div>
                        <!-- End Portfolio Item -->

                    </div>
                    <!-- End Portfolio Items -->

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

