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
        <title>MOSHRI9</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
       <section class="login py-5">
            <div class="container">
                <div class="row  g-0">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-6 text-center py-5 form" style="background:url('/image/ind.jpg');">
                        <h1 class="animate__animated animate__heartBeat animate__infinite">Demander votre projet</h1><br>
                        <form method="POST" action="{{route('register')}}">
                        @csrf
                            <div class="form-row py-4 pt-1">
                                <div class="offset-1 col-lg-10">
                                    <input type="text" style="opacity:0.7;" class="inp" id="inputNom" placeholder="   Nom" name="nom">
                                </div>
                            </div>
                            <div class="form-row py-4 pt-1">
                                <div class="offset-1 col-lg-10">
                                    <input type="text" style="opacity:0.7;" class="inp" id="inputPrenom" placeholder="   Prénom" name="prenom" >
                                </div>
                            </div>
                            <div class="form-row py-4 pt-1">
                                <div class="offset-1 col-lg-10">
                                    <input type="number" style="opacity:0.7;" class="inp" id="inputTelephone" placeholder="   Téléphone" name="telephone" >
                                </div>
                            </div>
                            <div class="form-row py-4 pt-1">
                                <div class="offset-1 col-lg-10">
                                    <input type="text" style="opacity:0.7;" class="inp" id="inputAdresse" placeholder="   Adresse" name="adresse" >
                                </div>
                            </div>
                            <div class="form-row py-4 pt-1">
                                <div class="offset-1 col-lg-10">
                                    <select style="opacity:0.7;" class="custom-select inp" id="inputGroupSelect02" name="ville">
                                        <option selected>  Choisir une ville</option>
                                        @foreach ($ville as $vill)
                                            <option value="{{$vill->id}}">{{$vill->ville}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row py-4 pt-1">
                                <div class="offset-1 col-lg-10">
                                    <select style="opacity:0.7;" class="custom-select inp" id="inputGroupSelect02" name="secteur">
                                        <option selected>  Choisir un secteur de votre projet</option>
                                        @foreach ($secteur as $sect)
                                            <option value="{{$sect->id}}">{{$sect->secteur}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row py-4 pt-1">
                                <div class="offset-1 col-lg-10">
                                    <select style="opacity:0.7;" class="custom-select inp" id="inputGroupSelect02" name="typeprojet">
                                        <option selected>  Choisir un type de votre projet</option>
                                        @foreach ($typeprojet as $type)
                                            <option value="{{$type->id}}">{{$type->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row py-4 pt-1">
                                <div class="offset-1 col-lg-10">
                                    <input type="email" style="opacity:0.7;" class="inp" id="inputEmail" placeholder="   Email" name="email" >
                                </div>
                            </div>
                            <div class="form-row py-4 pt-1">
                                <div class="offset-1 col-lg-10">
                                    <input type="password" style="opacity:0.7;" class="inp" id="inputPassword2" placeholder="   Mot de passe"  name="motdepasse">
                                </div>
                            </div>
                            <div class="form-row py-4 pt-1">
                                <div class="offset-1 col-lg-10">
                                    <textarea type="text" style="opacity:0.7;" class="inp" id="inputDescription2" placeholder="   Description du projet" name="description"></textarea>
                                </div>
                            </div>
                            <div>
                                <button type="submit" style="opacity:0.8;" class="btn btn1 btn-warning float-right"><b class="text-white">Envoyer la demande</b></button><br><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>








        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>