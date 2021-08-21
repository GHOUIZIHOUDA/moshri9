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
      <img class="d-block w-100" src="/image/ga.png" alt="First slide" style="height:100vh;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family:'Popins', sans-serif;">L'énergie solaire pour vos installations au Maroc</h5>
          <button type="button" class="btn btn-warning"><a href="{{route('register')}}"><b class="text-white">Demandez votre projet</b></a></button>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/arg.png" alt="Second slide" style="height:100vh">
      <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family:'Popins', sans-serif;">L'énergie solaire pour vos installations au Maroc</h5>
          <button type="button" class="btn btn-warning"><a href="{{route('register')}}"><b class="text-white">Demandez votre projet</b></a></button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/agr.jpg" alt="Third slide" style="height:100vh">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-family:'Popins', sans-serif;">L'énergie solaire pour vos installations au Maroc</h5>
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
<div style="overflow:hidden">   
    <br><br><h2 class="text-center title" style="width: 100%; font-family:'Popins', sans-serif;">AGRICULTURE  ET PHOTOVOLTAIQUE : UN MARIAGE REUSSI !</h2>   <br><br>
    <div>
    </div><br><br>
    <div class=" firstp" style="background-color:rgb(47,62,136, 0.8);">
      <br><br><p class="text-justify" style="width: 80%; margin: auto; font-family:'Popins', sans-serif;"><b>Pour les exploitants agricoles, on peut citer 3 raisons pour passer au photovoltaïque agricole :
        Valoriser vos surfaces inexploitées : une installation de panneaux photovoltaïques sur votre bâtiment agricole ou une toiture annexe n’est pas une  dépense  “superficielle”. Bien  au contraire, il s’agit d’un investissement qui, une fois amorti, vous permettra de dégager des revenus non négligeables ! 
      </b></p><br>
      <p class="text-center text-white" style="width: 80%; margin: auto; font-family:'Popins', sans-serif;"><b>Comment ?</b></p><br><br>
      <p class="text-justify " style="width: 80%; margin: auto; font-family:'Popins', sans-serif;"><b>– En optant  par  exemple  pour  <span class="text-warning">l’autoconsommation  directe  de  l’énergie  produite</span> (afin de faire des 
        économies  directes  sur  votre  facture d’électricité) que  vous  pouvez cumuler avec la vente de votre 
        surplus d’électricité inutilisée (lorsque votre production solaire dépasse vos besoins en énergie).</b></p>
      <p class="text-justify " style="width: 80%; margin: auto; font-family:'Popins', sans-serif;"><b>– En préférant  la  <span class="text-warning">vente  totale de la production de votre électricité</span> (un choix à privilégier si vous êtes propriétaire d’un bâtiment de stockage, par exemple !). </b></p>
      <p class="text-justify " style="width: 80%; margin: auto; font-family:'Popins', sans-serif;"><b>– Ou même, sous réserve d’éligibilité, en<span class="text-warning"> louant votre toiture</span> !</b></p>
      <p class="text-justify " style="width: 80%; margin: auto; font-family:'Popins', sans-serif;"><b>Ainsi, votre installation a le pouvoir de s’auto-amortir, puis de vous rapporter de l’argent !</b></p><br><br>
    </div><br><br><br><br>
    <div>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="/image/gar.png" alt="Card image cap" style="height:80%">
          <div class="card-body">
            <p class="card-text text-justify"><b style="font-family:'Popins', sans-serif;">le photovoltaique pour diminuer vos factures</b></p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <p class="card-text text-justify"><b style="font-family:'Popins', sans-serif;">photovoltaique pour améliorer le rendement agricole</b></p>
          </div>
          <img class="card-img-bottom" src="/image/ame.png" alt="Card image cap" style="height:80%">
        </div>
        <div class="card">
          <img class="card-img-top" src="/image/qual.png" alt="Card image cap" style="height:80%">
          <div class="card-body">
            <p class="card-text text-justify"><b style="font-family:'Popins', sans-serif;">le photovoltaique pour améliorer la qualité de la production</b></p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <p class="card-text text-justify"><b style="font-family:'Popins', sans-serif;">photovoltaique pour augmenter la quantité de production</b></p>
          </div>
          <img class="card-img-bottom" src="/image/quant.png" alt="Card image cap" style="height:80%">
        </div>
      </div>
    </div>
</div><br><br>
@include('../../layouts/footer')
























<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>