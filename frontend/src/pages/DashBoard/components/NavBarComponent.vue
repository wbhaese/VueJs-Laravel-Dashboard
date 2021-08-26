<template>
    <div class="navbar">
        <h3 class="logo">
            <i class="fa fa-star" />
            Logo Marca
        </h3>
        <a 
            href="" 
            class="logout"
            @click.prevent="logout"        
        >
            Sair
            <i class="fa fa-sign-out-alt"/>
        </a>
    </div>
</template>

<script>

    export default {
        name: 'NavBarComponent', 
        methods:{
            logout(){
                this.$router.push({name: 'login'})
            }
        }
    }
</script>

<style lang="scss">
    .navbar{
        .logo{
            color: #fff;
        }
    }

    .logout{
        color: #fff;
        text-decoration: none;
    }


</style>

