@extends('Layouts/master')

@section('content')
<div id="container">
	<div class="container vente" >
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 phar">
				<h2 style="margin-top: 50px; color: white;">Contactez Nous</h2>
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
	       				<h3 class="contact">send Your Message</h3>
	       			</div>
	       			<div class="panel-body">
	       				<div class="row">
	       					 <div class="col-lg-6">
                            <input type="text" placeholder="Name" class="form-control">
                        </div>
                        <div class="col-lg-6">
                        	<div class="form-group">
                            <input type="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                        	<div class="form-group ">
                            <input type="text" placeholder="Subject" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                        	<div class="form-group" >
                            <textarea placeholder="Message" class="form-control" style="height: 100px;"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 " >
                            <input class="btn bnt-success" type="submit" value="Send Message">
                        </div>
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