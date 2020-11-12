

<header class="clearfix"> 
                
        <!-- Start  Logo & Naviagtion  -->
        <div class="navbar navbar-default navbar-top">
            <div class="container">
                <div class="navbar-header" style="right: 100px;"> 
                    <!-- Stat Toggle Nav Link For Mobiles -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                    <!-- End Toggle Nav Link For Mobiles --> 
                    <a class="navbar-brand" href="adminprofile">Espace admin</a>
                <div class="navbar-collapse collapse nv"> 
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a href="listusers">Gestion utilisateurs</a></li>
                        <li> <a class="active" href="gestionarticles/articles">Gestions aticles</a></li>
                        <li><a href="{{ route('adminlog') }}">Se déconnecter</a> </li>

                    </ul>
                    <!-- End Navigation List --> 
                </div>
            </div>
            <div class="navbar">
                <div class="row">
                    <div class="col-md-6">
                        <h4><a class="choice" href="gestionarticles/articles">Articles</a></h4>
                    </div>

                    <div class="col-md-6">
                        <h4><a class="choice" href="gestionarticles/categories">Catégries</a></h4>
                    </div>

                </div>
            </div>
        
    
        
    </header>