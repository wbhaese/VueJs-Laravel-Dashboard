<template>
    <DashBoardComponent>
        <div slot="slot-pages" class="content-pages">
            <header class="title_pages">
                <p>Início</p>
            </header>

            <div >
                <div class="row">
                    <div class="col-12 col-md-3">
                        <CardsComponent 
                            :type="'Clientes'" 
                            :percentagem="'7%'" 
                            :icon="'fa-users'"
                            :qtd="'7590'"                        
                        />
                    </div>

                    <div class="col-12 col-md-3">
                        <CardsComponent 
                            :type="'Produto'" 
                            :percentagem="'57%'" 
                            :icon="'fa-box'"
                            :qtd="'350'"                        
                        />
                    </div>

                    <div class="col-12 col-md-3">
                        <CardsComponent 
                            :type="'Serviços'" 
                            :percentagem="'43%'" 
                            :icon="'fa-store'"
                            :qtd="'543'"                        
                        />
                    </div>

                    <div class="col-12 col-md-3">
                        <CardsComponent 
                            :type="'Relatórios'" 
                            :percentagem="'3%'" 
                            :icon="'fa-chart-bar'"
                            :qtd="'123'"                        
                        />
                    </div>
                </div>
            
            </div>

            <div class="mt-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ListsComponent 
                            :data="users" 
                            description="Clientes"
                            :columns="['Nome', 'E-mail']"
                        />
                    </div>
                    <div class="col-12 col-md-6">
                        <ListsComponent 
                            :data="users" 
                            description="Produtos"
                            :columns="['Nome', 'Valor']"
                        />
                    </div>
                </div>
            </div>
        </div>
    </DashBoardComponent>
</template>

<script>
/*eslint-disable*/
import DashBoardComponent from '../DashBoard/DashBoardComponent';
import CardsComponent from '../../components/CardsComponent';
import ListsComponent from '../../components/ListsComponent';

const axios = require('axios');

export default {
    name: 'HomeComponent',
    data(){
        return {
            users: [],
        }
    },
    //call functions inside on page mount (loaded)
    mounted(){
        this.getUsers();
    },
    methods:{
        async getUsers(){
            const response = await axios.get('https://jsonplaceholder.typicode.com/users');
            if (response.status == 200){
                this.users = response.data
            }else{
                console.log('error')

            }
        }
    },    
    components: {
        DashBoardComponent,
        CardsComponent,
        ListsComponent,
    }

}
</script>

<style lang="scss" scoped />

