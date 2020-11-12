 <header class="clearfix"> 
        
        <!-- Start Top Bar -->
       <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"> 
                        <!-- Start Contact Info -->
                        <ul class="contact-details">
                            <li><a href="#"><i class="fa fa-phone"></i> +221 77 250 76 41</a> </li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> terangaimmob@gmail.com</a> </li>
                        </ul>
                        <!-- End Contact Info --> 
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-6" style="left: 20%;"> 
                        <!-- Start Social Links -->
                        <button class="btn btn-success annonce" type="submit"><span class="fa fa-plus" ><a href="{{ route('addPost') }}" style="color: white;"> Passer une annonce</a></span></button>
                        <button class="btn btn-success annonce" type="submit" data-toggle="modal" data-target="#connexionModal"><span class="fa fa-user">Se Connectez</span></button>
                    <div class="modal fade" id="connexionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body mx-3 w-10">
                                        <div class="col-lg-12">
                                            <div class="form-group ">
                                            <input type="text" placeholder="Login" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group ">
                                            <input type="text" placeholder="password" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Se Connectez</button>
                                        <button type="button" class="btn btn-primary">S'inscrire</button>
                                    

                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- End Social Links --> 
                    </div>
                    <!-- .col-md-6 --> 
                </div>
                <!-- .row --> 
            </div>
            <!-- .container --> 
        </div>
        <!-- .top-bar --> 
        <!-- End Top Bar --> 
        
        <!-- Start  Logo & Naviagtion  -->
        <div class="navbar navbar-default navbar-top">
            <div class="container">
                <div class="navbar-header" style="right: 100px;"> 
                    <!-- Stat Toggle Nav Link For Mobiles -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- End Toggle Nav Link For Mobiles --> 
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="images/000.png" alt="" style="height: 50px; "></a> </div>
                <div class="navbar-collapse collapse"> 
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a class="active" href="{{ route('home') }}">Acceuil</a></li>
                        <li> <a class='demandes' href="{{route('demandes')}}">Demandes</a>
                        <li> <a href="#">Mes annonces</a>
                        </li>
                        <li> <a href="{{ route('parametre') }}">Parametres</a></li>
                        <li><a href="{{ route('home') }}">Se déconnecter</a> </li>

                    </ul>
                    <!-- End Navigation List --> 
                </div>
            </div>
        </div>
        <!-- End Header Logo & Naviagtion --> 
        
    </header>