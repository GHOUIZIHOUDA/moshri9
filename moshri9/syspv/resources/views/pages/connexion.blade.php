
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>        
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <title>MOSHRI9</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
        <br><br><br>
        <section class="login py-5">
            <div class="container">
                <div class="row row1 g-0">
                    <div class="col-lg-5">
                        <img src="/image/ind.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 text-center py-5 form">
                        <h1 class="animate__animated animate__heartBeat animate__infinite">Connexion</h1>
                        <form method="POST" action="{{route('login')}}">
                        @csrf
                            <div class="form-row py-4 pt-5">
                                <div class="offset-1 col-lg-10">
                                    <input type="email" class="inp" id="inputEmail" name="email" placeholder="      Email">
                                    @error('email')
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="offset-1 col-lg-10">
                                    <input type="password" class="inp" id="inputPassword2" name="password" placeholder="      Mot de passe">
                                    @if($errors->has('passeword'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div><br>
                            <div class="form-row py-3">
                                <div class="offset-1 col-lg-10">
                                    <button type="submit" class="btn btn1 btn-warning float-right"><b class="text-white"  style="font-family:'Popins', sans-serif;">SignIn</b></button>
                                </div><br>
                                <a href="{{route('societe')}}" class="bg-white" style="">
                                    <i class="fas fa-sign-out-alt text-warning animate__animated animate__heartBeat animate__infinite" id="log_out"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>