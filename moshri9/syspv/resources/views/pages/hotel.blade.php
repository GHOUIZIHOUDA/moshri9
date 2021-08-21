@include('../../layouts/navbar')

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
      <img class="d-block w-100" src="/image/the.png" alt="First slide" style="height:100vh;">
        <div class="carousel-caption d-none d-md-block">
          <h5  style="font-family:'Popins', sans-serif;">L'énergie solaire pour les hotels au Maroc.</h5>
          <button type="button" class="btn btn-warning"><a href="{{route('register')}}"><b class="text-white">Demandez votre projet</b></a></button>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/hot4.png" alt="Second slide" style="height:100vh">
      <div class="carousel-caption d-none d-md-block">
          <h5  style="font-family:'Popins', sans-serif;">L'énergie solaire pour vos installations au Maroc</h5>
          <button type="button" class="btn btn-warning"><a href="{{route('register')}}"><b class="text-white">Demandez votre projet</b></a></button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/htle.png" alt="Third slide" style="height:100vh">
        <div class="carousel-caption d-none d-md-block">
          <h5  style="font-family:'Popins', sans-serif;">L'énergie solaire pour vos installations au Maroc</h5>
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
</div><br><br>
<h2 class="text-center title" style="width: 100%; font-family:'Popins', sans-serif;">L'HOTELERIE ET PHOTOVOLTAIQUE : UN MARIAGE REUSSI !</h2>   <br><br>
<div>
</div><br><br>
<div class=" firstp" style="background-color:rgb(47,62,136, 0.9); font-family:'Popins', sans-serif;">
  <br><br><p class="text-justify " style="width: 80%;margin: auto;"><b>L’énergie solaire est une solution  propre, silencieuse  et écologique. Dans l’hôtellerie  comme dans toutes les  branches du  tourisme,  on s’intéresse  de  plus en plus à l’écologie. Et de plus en plus de vacanciers tendent vers des  séjours  respectueux de  l’environnement. C’est pourquoi l’<span class="text-warning">installation de panneaux solaires sur le toit de votre hôtel </span> un pas de plus vers l’évolution de votre offre touristique sur un secteur très concurrentiel.</b></p>
  <p class="text-justify " style="width: 80%;margin: auto;"><b>L’énergie représente de grosses dépenses pour un établissement hôtelier. Adopter ce type de système est  certes  coûteux  mais  pourrait  vous  permettre  de  faire de belles économies à terme. Finies les factures très salées de gaz, de fioul et d’électricité ! Les  capteurs solaires allègent considérablement votre budget.</b></p>
  <p class="text-justify " style="width: 80%;margin: auto;"><b>Les  conditions  d’utilisation  d’un  panneau  solaire  sont  idéales  dans un hôtel. En effet, c’est l’été qu’il  accueille  le  plus  de  clients  et  c’est  aussi  à  cette période-là que le soleil offre ce qu’il a de meilleur. Quant  aux  établissements  qui  font  leur  plus  grosse  saison  l’hiver,  en  montagne   par exemple,  ils  useront  du  soleil pour couvrir leurs besoins en eau chaude, tout en ayant recours à un chauffage d’appoint.</b></p><br>
</div><br><br><br><br>
    
<div>
  <div>
    <div class="card-deck"  style="font-family:'Popins', sans-serif;">
      <div class="card">
        <img class="card-img-top" src="/image/htt.png" alt="Card image cap" style="height:80%">
        <div class="card-body">
            <p class="card-text text-justify"><b class="text-centre">Économisez sur votre facture d'électricité</b></p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <p class="card-text text-justify"><b class="text-centre"> photovoltaique pour pour diminuer les charges des hoteliers</b></p>
        </div>
        <img class="card-img-bottom" src="/image/tth.png" alt="Card image cap" style="height:80%">
      </div>
      <div class="card">
        <img class="card-img-top" src="/image/teh.png" alt="Card image cap" style="height:80%">
        <div class="card-body">
          <p class="card-text text-justify"><b class="text-centre">le photovoltaique a pour but d'économiser de l'énergie et pour être plus écologique</b></p>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
@include('../../layouts/footer')

























<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>