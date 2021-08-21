@include('../../layouts/navbar')
<link rel="stylesheet" href="{{ asset('css/service.css') }}">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div style="overflow:hidden">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/image/etud.png" alt="First slide" style="height:100vh;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family:'Popins', sans-serif;">L'énergie solaire au Maroc.</h5>
          <button type="button" class="btn btn-warning"><a href="{{route('register')}}"><b class="text-white">Demandez votre projet</b></a></button>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/installation.jpg" alt="Third slide" style="height:100vh">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family:'Popins', sans-serif;">L'énergie solaire au Maroc.</h5>
          <button type="button" class="btn btn-warning"><a href="{{route('register')}}"><b class="text-white">Demandez votre projet</b></a></button>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/ins.jpeg" alt="Third slide" style="height:100vh">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family:'Popins', sans-serif;">L'énergie solaire au Maroc.</h5>
          <button type="button" class="btn btn-warning"><a href="{{route('register')}}"><b class="text-white">Demandez votre projet</b></a></button>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br><br>
<div class="row" style="font-family:'Popins', sans-serif;">
    <div class="col-md-2"></div>
    <div class="mt-4 col-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="">
                        <div class="card-horizontal" style="display: flex;flex: 1 1 auto; ">
                            <div class="img-square-wrapper" style="width:50%">
                                <img class="" src="/image/irradiation.jpg" alt="Card image cap" style="width:100%; height:200px">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-warning text-center">ANALYSE DU SITE</h4><br><br>
                                <p class="card-text text-center">Estimation d'ensoleillement</p>
                                <p class="card-text text-center">Estimation des heures d'ensoleillement</p>
                                <p class="card-text text-center">Estimation du besoin en eau/énergétique</p>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </div>
</div>
<div class="row" style="width:100%; font-family:'Popins', sans-serif;">
    <div class="col-md-2"></div>
    <div class="mt-4 col-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="">
                        <div class="card-horizontal" style="display: flex; flex: 1 1 auto; ">
                            <div class="img-square-wrapper" style="width:100%">
                                <br><h4 class="card-title text-warning text-center">CHOIX DES EQUIPEMENTS</h4><br><br>
                                <p class="card-text text-center">Choix des équipements</p>
                                <p class="card-text text-center">Choix des câbles</p>  
                            </div>
                            <div class="card-body" style="width:50%">
                                <img class="" src="/image/installat.png" alt="Card image cap" style="width:100%; height:200px">                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="font-family:'Popins', sans-serif;">
    <div class="col-md-2"></div>
    <div class="mt-4 col-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="">
                        <div class="card-horizontal" style="display: flex;flex: 1 1 auto; ">
                            <div class="img-square-wrapper" style="width:50%">
                                <img class="" src="/image/cout.png" alt="Card image cap" style="width:100%; height:200px">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-warning text-center">COUT D'INSTALLATION</h4><br><br>
                                <p class="card-text text-center">Calcul du coût annuel de l’investissement</p>
                                <p class="card-text text-center">Calcul du coût du KWh</p>                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="width:100%; font-family:'Popins', sans-serif;">
    <div class="col-md-2"></div>
    <div class="mt-4 col-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="">
                        <div class="card-horizontal" style="display: flex;flex: 1 1 auto; ">
                            <div class="img-square-wrapper" style="width:100%">
                                <br><h4 class="card-title text-warning text-center">NOUS SOMMES INSTALLATEURS DE PANNEAUX SOLAIRES AU MAROC</h4><br><br>
                                <p class="card-text text-center">Construction de l’armature</p>
                                <p class="card-text text-center">Inclinaison et orientation des panneaux photovoltaïques</p>  
                                <p class="card-text text-center">Assemblage des panneaux photovoltaïques</p>
                            </div>
                            <div class="card-body" style="width:50%">
                                <img class="" src="/image/ins.jpeg" alt="Card image cap" style="width:100%; height:200px">                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="font-family:'Popins', sans-serif;">
    <div class="col-md-2"></div>
    <div class="mt-4 col-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="">
                        <div class="card-horizontal" style="display: flex;flex: 1 1 auto; ">
                            <div class="img-square-wrapper" style="width:50%">
                                <img class="" src="/image/batterie.jpg" alt="Card image cap" style="width:100%; height:200px">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-warning text-center">NOUS SOMMES INSTALLATEURS DES EQUIPEMENTS SOLAIRES AU MAROC</h4><br><br>
                                <p class="card-text text-center">Installation des équipements photovoltaiques</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="width:100%; font-family:'Popins', sans-serif;">
    <div class="col-md-2"></div>
    <div class="mt-4 col-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="">
                        <div class="card-horizontal" style="display: flex;flex: 1 1 auto; ">
                            <div class="img-square-wrapper" style="width:100%">
                                <br><h4 class="card-title text-warning text-center">NOUS SOMMES INSTALLATEURS DES CABLES SOLAIRES AU MAROC</h4><br><br>
                                <p class="card-text text-center">Le câblage photovoltaïque</p>
                                <p class="card-text text-center">La mise à la terre</p>  
                                <p class="card-text text-center">Protection des installations photovoltaiques</p>
                            </div>
                            <div class="card-body" style="width:50%">
                                <img class="" src="/image/cable.jpg" alt="Card image cap" style="width:100%; height:200px">                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="font-family:'Popins', sans-serif;">
    <div class="col-md-2"></div>
    <div class="mt-4 col-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="">
                        <div class="card-horizontal" style="display: flex;flex: 1 1 auto; ">
                            <div class="img-square-wrapper" style="width:50%">
                                <img class="" src="/image/maintprev.jpg" alt="Card image cap" style="width:100%; height:200px">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-warning text-center">MAINTENANCE PREVENTIVE DES SYSTEMES PHOTOVOLTAIQUES</h4><br><br>
                                <p class="card-text text-center">La maintenance  préventive  systématique</p>
                                <p class="card-text text-center">La maintenance  préventive  conditionnelle</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="width:100%; font-family:'Popins', sans-serif;">
    <div class="col-md-2"></div>
    <div class="mt-4 col-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="">
                        <div class="card-horizontal" style="display: flex;flex: 1 1 auto; ">
                            <div class="img-square-wrapper" style="width:100%">
                                <br><h4 class="card-title text-warning text-center">MAINTENANCE CRRECTIVE DES SYSTEMES PHOTOVOLTAIQUES</h4><br><br>
                                <p class="card-text text-center">La maintenance corrective palliative</p>
                                <p class="card-text text-center">La maintenance corrective curative</p>
                            </div>
                            <div class="card-body" style="width:50%">
                                <img class="" src="/image/maintcorrect.jpg" alt="Card image cap" style="width:100%; height:200px">                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('../../layouts/footer')

















<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
