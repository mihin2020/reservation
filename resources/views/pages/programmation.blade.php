<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/programmation.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Programmation</title>
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
    <div class="container pl-5 my-4">
        <div class="row">
            <div class="col-5 font-weight-bold text-uppercase text-center text_color size "><a href="/dashboard"> Tableau de bord/ Programmation</a></div>
            <div class="offset-col-7"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
              <div class="  programme px-4 py-3 mb-5">
                  <form action="">
                  <div class="form-group my-4 ">
                        <label for="example-date-input" class=" text_color font-weight-bold size form-label">Date</label>
                        <div class="">
                        <input class="form-control" type="date" value="" id="example-date-input">
                  </div>

                  <div class="form-group my-4 px-3">
                      <label for="example-time-input" class=" text_color  font-weight-bold form-label">Horaire</label>
                      <div class="row">
                        <input class="col-5 form-control " type="time" value="" id="example-time-input">
                        <div class="col-2 ">
                          <p class="text-center text_color font-weight-bold"> à</p>
                        </div>
                        <input class="col-5 form-control" type="time" value="" id="example-time-input">
                      </div>
                  </div>

                  <div class="form-group my-4">
                      <label for="example-number-input" class=" text_color  font-weight-bold form-label">Nombre de place</label>
                      <div class="">
                        <input class="form-control" type="number" value="" id="example-number-input">
                  </div>
                  </form>
              </div>
              </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <footer>
       <!-- <div class="container-fluid pied_fond">
            <p class="text-center text-white text-uppercase py-2">Simplon 2021</p>
        </div>-->
    </footer>
</body>
</html>