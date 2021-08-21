<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>MOSHRI9</title>
        <link rel="stylesheet" href="{{ asset('css/dashsecteur.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!--Boxicons CDN Link -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>        
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    </head>
    <body style="background:url('/image/ind.jpg'); background-repeat:no-repeat; background-size:100%; background-opacity:0.5;">
        <div class="sidebar">
            <div class="logo_content">
                <div class="logo">
                    <div class="logo_name">MOSHRI9</div>
                </div>
                <i class="fas fa-bars" id="btn"></i>
            </div>
            <ul class="nav_list">
                <li>
                    <a href="{{route('dashboard')}}">
                        <i class="fas fa-th-large"></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('dashboard')}}">
                        <i class="fab fa-product-hunt"></i>
                        <span class="links_name">Projets demandés</span>
                    </a>
                    <span class="tooltip">Projets demandés</span>
                </li>
                <li>
                    <a href="{{route('secteur')}}">
                        <i class="fab fa-stripe-s"></i>
                        <span class="links_name">Secteurs</span>
                    </a>
                    <span class="tooltip">Secteurs</span>
                </li>
                <li>
                    <a href="{{route('ville')}}">
                        <i class="fas fa-city"></i>
                        <span class="links_name">Villes</span>
                    </a>
                    <span class="tooltip">Villes</span>
                </li>
            </ul>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                        <img src="/image/admin.png" alt="">
                        <div class="name_job">
                            <div class="job">Admin</div>
                        </div>
                    </div>
                    <a href="{{route('connexion')}}" class="bg-white" style="">
                      <i class="fas fa-sign-out-alt text-white" id="log_out"></i>
                    </a>
                </div>
            </div>
        </div>

<div class="home_content" style="left:15%;">
    <div class="text">
        <br><div>
            <div>
                <div class="row">
                    <b-col class="col-md-4"></b-col>
                    <b-col class="col-md-12">
                        <div class="container">           
                            <table class="table table-striped table-responsive">
                                <thead class="">
                                    <tr>
                                        <th>ID</th>
                                        <th>Ville</th>
                                        <th>Code postal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ville as $vill)
                                    <tr>
                                        <td name="id"><b>{{$vill->id}}</b></td>
                                        <td name="ville"><b>{{$vill->ville}}</b></td>
                                        <td name="codepostal"><b>{{$vill->codepostal}}</b></td>
                                        <td><button class="btn btn-danger" ><a href = '/ville/delete/{{ $vill->id }}' style="text-decoration:none; color:#ffffff;">Delete</a></button></td>                            
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </b-col>
                </div>
            </div>
        </div>
    </div>
</div><br><br>
<div class="col-md-8 float-right">
    <div class="modal-dialog col-md-6">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une ville</h5>
            </div>
            <div class="modal-body">
                <form class=" mb-6" action="{{route('ville')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="inputVille">Ville</label>
                        <input type="text" class="form-control" id="inputVille" placeholder="Ville" name="ville">
                    </div>
                    <div class="form-group">
                        <label for="inputCodepostal">Code postal</label>
                        <input type="number" class="form-control" id="inputCodepostal" placeholder="Code postal" name="codepostal">
                    </div>
                    <div><button type="submit" class="btn btn-warning float-right"><b class="text-white">Ajouter</b></button><br><br></div>
                </form>
            </div>
        </div>
    </div>
</div>


       


        <script>
            let btn = document.querySelector("#btn");
            let sidebar = document.querySelector(".sidebar");
            let searchBtn = document.querySelector(".bx-search");

            btn.onclick = function() {
                sidebar.classList.toggle("active");
            } 
        </Script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   </body>
