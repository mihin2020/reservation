<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/acceuil.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
    <!--<link rel="stylesheet" href="Style/bootstrap/css/bootstrap.min.css">-->
</head>
       
       <body style="background:#dddddd;">
    <div class="container-fluid p-0">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light fond_entete">
                <a class="navbar-brand ml-4 font-weight-bold text-white" href="#"><img src="img/simplon.png" width="75px" height="75px" alt=""> <span class="top">SIMPLON</span> </a>
        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <div>
                        <img src="img/images4.png" width="90px" height="50px" class="droite" alt="">
                    </div>
                     <div>
                      <!--  <img src="img/noti.png" width="90px" height="85px" class="droite1 mb-1" alt="">-->
                    </div>
                    <a href="/deconnexion"> <button class="btn btn-outline-light my-2 my-sm-0 font-weight-bold droite2" type="submit" >Deconnexion</button></a>
            </div>
                </div>
              </nav>
        </header>
       </div>

        
    <table class="container haut">
        <div class="text-danger my-2">
            <h3 class=" centre text-center ">Liste des horaires et des jours ouvrables</h3>
          </div>
        <thead>
            <tr>
                <th><h1>JOUR</h1></th>
                <th><h1>HORAIRE</h1></th>
                <th><h1>RESERVER</h1></th>
            </tr>
        </thead>
        @foreach($programs as $program)
        <tbody>
            <tr>
                <td class="text-danger font-weight-bold">{{$program->jour}}</td>
                <td class="text-danger font-weight-bold">{{$program->start_hour}}-{{$program->end_hour}}</td>
                <td class=""><img src="img/reser.png" alt="" title="Reserver une place"></td>
               
            </tr>     
        </tbody>
        @endforeach
    </table>

    <footer>
        <div class="container-fluid pied_fond ">
            <p class="text-center text-white text-uppercase py-2">Simplon 2021</p>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>


</html>