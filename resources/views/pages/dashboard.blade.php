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
                   <!-- <img src="img/noti.png" width="90px" height="85px" class="droite1 mb-1" alt="">-->
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
                         <a href="register_cour"> <img src="img/reserver.png" width="175px" alt=""></a>
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

    @foreach($programs as $program)
    <div class="container">
         <!--Accordion wrapper-->
      <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
    <div class="card">

  <!-- Card header -->
  <div class="card-header" role="tab" id="headingTwo1">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
      aria-expanded="false" aria-controls="collapseTwo1">
      <h5 class="mb-0">
      {{$program->jour}} <i class="fas fa-angle-down rotate-icon"></i>
      </h5>
    </a>
  </div>

  <!-- Card body -->
  <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1"
    data-parent="#accordionEx1">
    <div class="card-body">
      <div class="row">
          <div class='col-6'>
          <div class="card">
            <div class="card-body ">
           <p class="text-center font-weight-bold">Horaire :</p>
              <div class="row">
                <div class="col-5">
                 {{$program->start_hour}}
                </div>
                <div class="col-2">
                 <p>a</p>
                </div>
                <div class="col-5">
                   {{$program->end_hour}}
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class='col-6'>
          <div class="card">
            <div class="card-body">
              <p class="text-center font-weight-bold">Nombre de place :</p>
              <p class="text-center ">{{$program->place}}</p>
            </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
    </div>
    </div>
@endforeach


    <footer>
        <div class="container-fluid pied_fond">
            <p class="text-center text-white text-uppercase py-2">Simplon 2021</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        
    <script>
          $('#myList a').on('click', function (event) {
        event.preventDefault()
        $(this).tab('show')
      })
    </script>
</body>
</html>