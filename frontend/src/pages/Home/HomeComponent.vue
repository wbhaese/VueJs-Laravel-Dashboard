<template>
    <DashBoardComponent>
        <div slot="slot-pages" class="content-pages">
            <header class="title_pages">
                <p>Início</p>
            </header>

            <div>
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


        </div>
    </DashBoardComponent>
</template>

<script>
import DashBoardComponent from '../DashBoard/DashBoardComponent';
import CardsComponent from '../../components/CardsComponent';

export default {
    components: {
        DashBoardComponent,
        CardsComponent,
    }

}
</script>

<style lang="scss" scoped />

