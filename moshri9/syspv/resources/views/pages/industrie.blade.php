<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@include('../../layouts/navbar')
<div class="indus" style="overflow:hidden">
    <div>

<div style="overflow:hidden">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/image/ind.jpg" alt="First slide" style="height:100vh;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family:'Popins', sans-serif;">L'énergie solaire pour l'industrie au Maroc.</h5>
          <button type="button" class="btn btn-warning"><a href="{{route('register')}}"><b class="text-white">Demandez votre projet</b></a></button>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/inds.png" alt="Second slide" style="height:100vh">
      <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family:'Popins', sans-serif;">L'énergie solaire pour l'industrie au Maroc.</h5>
          <button type="button" class="btn btn-warning"><a href="{{route('register')}}"><b class="text-white">Demandez votre projet</b></a></button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/indst.png" alt="Third slide" style="height:100vh">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family:'Popins', sans-serif;">L'énergie solaire pour l'industrie au Maroc.</h5>
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
</div><br><br>
<h2 class="text-center title" style="width: 100%; font-family:'Popins', sans-serif;">L'INDUSTRIE ET PHOTOVOLTAIQUE : UN MARIAGE REUSSI !</h2>   <br><br>
<div>
</div><br><br>
<div class=" firstp" style="background-color:rgb(47,62,136, 0.8); font-family:'Popins', sans-serif;">
  <br><br><h3 class="text-center">Vous êtes industriel</h3><br>
  <p class="text-center text-white" style="width: 80%; margin: auto;"><b>Vos objectifs ?</b></p><br>
  <br><p class="text-justify " style="width: 80%; margin: auto;"><b>Vous souhaitez investir dans un projet rentable et réduire votre facture d’électricité, en intégrant la production d’énergie renouvelable.
  </b></p><br>
  <p class="text-justify " style="width: 80%; margin: auto;"><b>- <span class="text-warning">Réduire votre facture énergétique annuelle</span> tout en vous engageant dans la transition énergétique</b></p>
  <p class="text-justify " style="width: 80%; margin: auto;"><b>- <span class="text-warning">Gagner en image</span> en réduisant votre empreinte carbone</b></p>
  <p class="text-justify " style="width: 80%; margin: auto;"><b>- <span class="text-warning">Optimiser la rénovation ou la construction</span> d’un nouveau bâtiment de stockage ou de production</b></p>
  <p class="text-justify " style="width: 80%; margin: auto;"><b>- <span class="text-warning">Valoriser votre patrimoine</span> foncier </b></p><br><br>
</div><br><br><br><br>
<div>
    <div class="card-deck" style="font-family:'Popins', sans-serif;">
      <div class="card">
        <img class="card-img-top" src="/image/in.png" alt="Card image cap" style="height:80%">
        <div class="card-body">
            <p class="card-text text-justify"><b class="text-centre">le photovoltaique pour diminuer vos factures</b></p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <p class="card-text text-justify"><b class="text-centre"> photovoltaique pour améliorer le rendement industriel</b></p>
        </div>
        <img class="card-img-bottom" src="/image/ins.png" alt="Card image cap" style="height:80%">
      </div>
      <div class="card">
        <img class="card-img-top" src="/image/insd.png" alt="Card image cap" style="height:80%">
        <div class="card-body">
            <b class="text-centre">le photovoltaique pour améliorer la qualité de production</b>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <p class="card-text text-justify"><b class="text-centre"> photovoltaique pour augmenter la quantité de production</b></p>
        </div>
        <img class="card-img-bottom" src="/image/noor.png" alt="Card image cap" style="height:80%">
      </div>
    </div>
</div><br><br><br><br>
@include('../../layouts/footer')























<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>