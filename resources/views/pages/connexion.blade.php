<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/connexion.css">
    <link rel="stylesheet"  href="/css/bootstrap.min.css">
    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5 centrer">
            <div class="col-5 mt-5 img_disp">
                <img src="img/img.png" width="450px" height="400px" alt="">
            </div>
            <div class="col-7">
                
                    <div class="row main-content ml-5 text-center">
                        <div class="col-md-5 text-center company__info">
                            <div class="mb-5 "><img src="img/simplon.png" width="100px" height="100px" alt=""></div>
                            <h4 class="text-uppercase">Simplon</h4>
                        </div>
                        <div class="col-md-7 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="">
                                    <h2 class="mt-2 text-uppercase">Connexion</h2>
                                </div>
                                <div class="">
                                    <form control="" class="form-group" action="/connexion" method="post">
                                    {{@csrf_field()}}
                                        <div class="">
                                        @if($errors->has('email'))
                                            <p class="font-weight-bold text-danger">{{$errors->first('email') }}</p> 
                                        @endif
                                            <input type="text" name="email" value="{{old('email')}}" id="username" class="form__input" placeholder="Email">
                                        </div>
                                        <div class="">
                                        @if($errors->has('password'))
                                            <p class="font-weight-bold text-danger">{{$errors->first('password') }}</p> 
                                        @endif
                                            <!-- <span class="fa fa-lock"></span> -->
                                            <input type="password" name="password" id="password" class="form__input" placeholder="Mot de passe">
                                        </div>
                                        <div class=" ">
                                            <button class="btn btn-outline-danger my-2 my-sm-0 font-weight-bold" type="submit">Se connecter</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="">
                                    <p class="font-weight-bold text-danger">Vous n'avez pas de compte? <a href="/inscription">Inscrivez-vous</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid pied_fond">
            <p class="text-center text-white text-uppercase py-2">Simplon 2021</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>