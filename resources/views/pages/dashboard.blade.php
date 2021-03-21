<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>

<body class="back_ground">
   <div class="container-fluid p-0">
    <header> <!-- entete-->
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
                    <img src="img/noti.png" width="90px" height="85px" class="droite1 mb-1" alt="">
                </div>
               <a href="/deconnexion"> <button class="btn btn-outline-light my-2 my-sm-0 font-weight-bold droite2" type="submit" >Deconnexion</button></a>
            </div>
          </nav>
    </header>
   </div>
    <!--section 1-->
    <div class="container-fluid pl-5 my-4">
        <div class="row">
            <div class="col-2 font-weight-bold text-uppercase text_color size"> Tableau de bord</div>
            <div class="offset-col-10"></div>
        </div>
    </div>
    <!--les differentes options-->
        <section id="featured-services" class="featured-services">
            <div class="container-fluid ">
              <div class="row px-4 ">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0  ">
                  <div class="icon-box shadow-lg" data-toggle="modal" data-target="#exampleModal">
                    <div class="">
                        <a href="/programmation"><img src="img/programmer.png" width="175px" alt=""></a>
                    </div>
                    <p class="text_color text-center font-weight-bold">Programmation</p>
                  </div>
                </div>
            
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">
                    <div class="icon-box shadow-lg"  data-toggle="modal" data-target="#exampleModal">
                      <div class="">
                         <a href=""> <img src="img/reserver.png" width="175px" alt=""></a>
                        </div>
                      <p class="text_color text-center font-weight-bold">Inscription en cours</p>
                    </div>
                  </div>
            
                  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">
                    <div class="icon-box shadow-lg"  data-toggle="modal" data-target="#exampleModal">
                      <div class="">
                          <a href=""><img src="img/reservation.png" width="175px" alt=""></a>
                    </div>
                      <p class="text_color text-center font-weight-bold">Reservation en cours</p>
                    </div>
                  </div>
            
                  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">
                    <div class="icon-box shadow-lg"  data-toggle="modal" data-target="#exampleModal">
                      <div class="">
                          <a href=""><img src="img/apprenant.png" width="175px" alt=""></a>
                    </div>
                      <p class="text_color text-center font-weight-bold">Mes apprennants</p>
                    </div>
                  </div>
              </div>
            </div>
        </section>

         <!--section 2-->
    <div class="container-fluid pl-5 my-4">
        <div class="row">
            <div class="col-4 font-weight-bold text-uppercase text_color size"> Programme hebdomadaire</div>
            <div class="offset-col-8"></div>
        </div>
    </div>



<div>

</div>





    <footer>
        <div class="container-fluid pied_fond">
            <p class="text-center text-white text-uppercase py-2">Simplon 2021</p>
        </div>
    </footer>
</body>
</html>