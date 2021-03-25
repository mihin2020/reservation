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

        
    <table class="container">
        <div class="text-danger" style="margin-left: 100px;">
            <h3 class="container-fluid" style="text-align: center;  margin-top: 100px;">Liste des horaires et des jours ouvrables</h3>
          </div>
        <thead>
            <tr>
                <th><h1>JOUR</h1></th>
                <th><h1>HORAIRE</h1></th>
                <th><h1>RESERVER</h1></th>
                <th><h1>ANNULER</h1></th>
                
            </tr>
        </thead>
        @foreach($programs as $program)
        <tbody>
            <tr>
                <td class="text-danger font-weight-bold">{{$program->jour}}</td>
                <td class="text-danger font-weight-bold">{{$program->start_hour}}-{{$program->end_hour}}</td>
                <td class=""><img src="img/reser.png" alt="" title="Reserver une place"></td>
                <a href=""><td><img src="img/Delete_52px.png" alt=""></td></a>
            </tr>     
        </tbody>
        @endforeach

        
   


      
</body>


</html>