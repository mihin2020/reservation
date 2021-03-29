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
                   <!-- <img src="img/noti.png" width="90px" height="85px" class="droite1 mb-1" alt="">-->
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
                  <form action="/program" method="post">
                  {{@csrf_field()}}
                  <div class="form-group  text_color  font-weight-bold  my-4">
                  <label for="exampleSelect1 ">jour</label>
                        <select class="form-control" name="jour"  id="exampleSelect1">
                        <option>Lundi</option>
                        <option>Mardi</option>
                        <option>Mercredi</option>
                        <option>Jeudi</option>
                        <option>Vendredi</option>
                        <option>Samedi</option>
                        <option>Dimanche</option>
                        </select>
                  </div>
                  <div class="form-group my-4 px-3">
                      <label for="example-time-input" class=" text_color  font-weight-bold form-label">Horaire</label>
                      <div class="row">
                        <input class="col-5 form-control "name="start_hour" type="time" value="" id="example-time-input">
                        <div class="col-2 ">
                          <p class="text-center text_color font-weight-bold"> à</p>
                        </div>
                        <input class="col-5 form-control" name="end_hour" type="time" value="" id="example-time-input">
                      </div>
                  </div>
                  <div class="form-group my-4">
                      <label for="example-number-input" class=" text_color  font-weight-bold form-label">Nombre de place</label>
                      <div class="">
                        <input class="form-control" type="number" name="place" value="" id="example-number-input">
                        <button class="btn btn-outline-danger my-sm-0 m-auto font-weight-bold droite2" type="submit" >Soumettre</button>
                  </div>
                  </form>
              </div>
              </div>
            </div>
            <div class="col-1"></div>
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