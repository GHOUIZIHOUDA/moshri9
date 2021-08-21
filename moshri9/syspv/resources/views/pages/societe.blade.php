@include('../../layouts/navbar')
@include('../../layouts/header')
<div class="nosservice" style="overflow:hidden">
    <div><br><br><h1 class="text-center nosservices" style="color:#202D65; font-family:'Popins', sans-serif;">Nos services</h1><br><br></div>
    <div class="card-deck" style="font-family:'Popins', sans-serif;">
      <div class="card">
        <img class="card-img-top" src="/image/etude.png" alt="Card image cap" style="height:80%">
        <div class="card-body">
          <h5 class="card-title text-center">Etude technique</h5>
          <p class="card-text text-justify">Avant de faire toute installation photovoltaique, il est nécessaire de faire une étude préliminaire.</p>
        </div>
        <div class="card-footer">
          <button block class="btn btn-warning" style="width:100%; border:2px solid warning; "><a href="{{route('service')}}"><b class="text-white">Découvrez nos services</b></a></button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/image/installation.jpg" alt="Card image cap" style="height:80%">
        <div class="card-body">
          <h5 class="card-title text-center">Installation technique</h5>
          <p class="card-text text-justify">Après l'étude, la société a le plisair de faire l'installation de votre projets.</p>
        </div>
        <div class="card-footer">
          <button block class="btn btn-warning" style="width:100%"><a href="{{route('service')}}"><b class="text-white">Découvrez nos services</b></a></button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/image/maintenance.png" alt="Card image cap" style="height:80%">
        <div class="card-body">
          <h5 class="card-title text-center">Maintenance technique</h5>
          <p class="card-text text-justify">Notre société, après toute installation, elle est responsable sur toute maintenance demandé par le client sur notre projets réalisés.</p>
        </div>
        <div class="card-footer">
          <button block class="btn btn-warning" style="width:100%"><a href="{{route('service')}}"><b class="text-white">Découvrez nos services</b></a></button>
        </div>
      </div>
    </div>
    <div>
      <div><br><br><h1 class="text-center nossecteurs" style="color:#202D65; font-family:'Popins', sans-serif;">Nos secteurs</h1><br><br></div>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="/image/agr.jpg" alt="Card image cap" style="height:80%">
          <div class="card-body">
            <h5 class="card-title text-center">Agriculture</h5>
            <p class="card-text text-justify">Utilisé le photovoltaique dans le domaine de l'Agriculture. C'est la diminution dans vos factures et la bénéfice de la clote.</p>
          </div>
          <div class="card-footer">
            <button block class="btn btn-warning" style="width:100%"><a href="{{route('agriculture')}}"><b class="text-white">Découvrez nos secteurs</b></a></button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="/image/ind.jpg" alt="Card image cap" style="height:80%">
          <div class="card-body">
            <h5 class="card-title text-center">Industrie</h5>
            <p class="card-text text-justify">Utilisé le photovoltaique dans le domaine de l'Industrie. C'est la diminution dans vos factures et la bénéfice de l'industrialisation.</p>
          </div>
          <div class="card-footer">
            <button block class="btn btn-warning" style="width:100%"><a href="{{route('industrie')}}"><b class="text-white">Découvrez nos secteurs</b></a></button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="/image/hot3.png" alt="Card image cap" style="height:80%">
          <div class="card-body">
            <h5 class="card-title text-center">Hotel</h5>
            <p class="card-text text-justify">Utilisé le photovoltaique dans les hotels. C'est la diminution dans vos factures et la bénéfice des clients.</p>
          </div>
          <div class="card-footer">
            <button block class="btn btn-warning" style="width:100%"><a href="{{route('hotel')}}"><b class="text-white">Découvrez nos secteurs</b></a></button>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div><br><br><h1 class="text-center nossecteurs" style="color:#202D65; font-family:'Popins', sans-serif;">Notre vision</h1><br><br></div>
        <div class="container">
          <div class="row">
            <div class="col">
                    <p class="card-text text-justify" ><b>Le   Maroc   a  connu  une  augmentation  de  son  importation  énergétique de   87%   en   49   ans.   En   2021,   le    Maroc   a   importé   70.72%    de son énergie.
                    Avec  des  ressources  en  énergie  fossiles  qui   approchent   l’épuisement, dans    un    contexte    d'augmentation    des    prix   et   de   réchauffement climatique ;   <span class="moshriq">MOSHRI9</span>   a   été   fondé,   afin   d’œuvrer,   à  la  transition énergétique     vers    des     sources     renouvelables,    et    en    particulier l’énergie    solaire    photovoltaïque    sous    ses    différentes    formes.
                    Les besoins en électricité ne cessent d’augmenter à travers le monde.</b></p>
            </div>
            <div class="col">
                  <img class="card-img-top" src="/image/pv15.png" alt="Card image cap" style="height:80%">
            </div>
          </div>
        </div>
      </div>
    </div>
</div>    





@include('../../layouts/footer')

