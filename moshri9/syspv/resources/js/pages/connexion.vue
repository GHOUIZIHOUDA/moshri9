<template>
<div>
    <Navbar></Navbar>
    <Header></Header><br><br>

    <div>
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 form ml-1">
        <h1 class="title text-center">Connexion</h1><br><br>
        <form class=" mb-6">
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword2">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Mot de passe">
            </div>
            <div><button type="submit" class="btn btn-warning float-right"><b class="text-white">Login</b></button></div><br><br>
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
        data(){
            return {
                email : '',
                password : '',
                loading : false
            }
        },
        methods: {
            checkEmailIsValid(){
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
                {
                    return true;
                }else{
                    return false;
                }
            },
            login(){
                this.loading = true;
                this.errors = [];
                axios.post('http://localhost/syspv/public/login',{
                    email : this.email,
                    password : this.password,
                }).then(response => {
                    toastr.success('Vous êtes connectés');
                    location.reload();
                }).catch(err => {
                    this.loading = false;
                    if(err.response.status == 422){
                        toastr.error("Email ou mot de passe est incorrect");
                    }else{
                        toastr.error("Une erreur est survenue veuillez réessayer");
                    }
                });
            }
        },
        computed : {
            validEmailAndPassword(){
                return this.checkEmailIsValid() && this.password && !this.loading;
            }
        }
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