<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Eir-db</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" href="{{URL::asset('eir-assets/images/costum-images/Logo/favicon.png'); }} " />
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <img src="{{URL::asset('eir-assets/images/costum-images/eirdb-logo.png'); }}" class="text-center" >
                                        <h3 class="text-center font-weight-light my-4">Connexion</h3>
                                    </div>
                                    <div class="card-body">
                                        <form  method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                            <label for="inputEmail">Adresse e-mail : </label>
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="Email" />
                                               
                                            </div>
                                            <div class="form-floating mb-3">
                                            <label for="inputPassword">Mot de passe : </label>
                                                <input class="form-control" id="inputPassword"  type="password" name="password" placeholder="Password" />
                                            
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                    <button class="btn btn-primary">login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>