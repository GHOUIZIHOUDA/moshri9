<template>
<div>
    <Navbar></Navbar>
    <Header></Header><br><br>

    <div>
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 form ml-1">
        <h1 class="title text-center">Register</h1><br><br>
        <form class=" mb-6" >
            <div class="form-group">
                <label for="inputNom">Nom</label>
                <input type="text" class="form-control" id="inputNom" placeholder="Nom" >
            </div>
            <div class="form-group">
                <label for="inputPrenom">Prénom</label>
                <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom" >
            </div>
            <div class="form-group">
                <label for="inputTelephone">Téléphone</label>
                <input type="number" class="form-control" id="inputTelephone" placeholder="Téléphone" >
            </div>
            <div class="form-group">
                <label for="inputAdresse">Adresse</label>
                <input type="text" class="form-control" id="inputAdresse" placeholder="Adresse" >
            </div>
            <div class="form-group">
                <label for="inputVille">Ville</label>
                <input type="text" class="form-control" id="inputVille" placeholder="Ville" >
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" >
            </div>
            <div class="form-group">
                <label for="inputPassword2">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Mot de passe" >
            </div>
            <div class="form-group">
                <label for="inputNote2">Discription du projet</label>
                <textarea type="text" class="form-control" id="inputDescription2" placeholder="Description"></textarea>
            </div>
            <div><button type="submit" class="btn btn-warning float-right"><b class="text-white">Créer un compte</b></button></div>
        </form>
        </div>
        <div class="col-md-1"></div>
    </div><br><br>
    </div><br><br>
</div>
</template>
<script>
import Navbar from '../components/Navbar.vue'
import Header from '../components/Header.vue'
import axios from 'axios';

export default {
    components: {
    
    Navbar, Header,
    },
    
    
}



</script>
<style scoped>
    .title{
        color: #ffffff;
    }
    .ty{
        color: black;
    }
    .form{
        background-color: #050082;
        color: #ffffff;
    }
</style>