
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->


    <title></title>


    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body background="images/bg.png">

    <div class="container">
        <h1>Espace admin</h1>
    <div class="row rowlog justify-content-center">

        <div class="col-md-8 col-md-offset-2 logcontain">

                
                    <form method="POST" action="connect">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right" >Adresse Email</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Vote adresse email" required  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">Mot de passe</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Votre mot de passe" required >

                                
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    se connecter
                                </button>

                               
                                    <a class="btn btn-link" href="">
                                        Je suis un utiliateur
                                    </a>
                             
                            </div>
                        </div>
                    </form>
                
            
        </div>
    </div>
</div>
    </div>
</body>
</html>




