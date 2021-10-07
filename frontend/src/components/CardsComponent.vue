<template>
    <div class="my_cards">
        <div class="top content">
            <h3>{{ type }}</h3>
            <p class="percentagem"><i class="fa fa-arrow-up"></i> {{ percentagem }}</p>
        </div>

        <div class="footer content">
            <i :class="['fa ico', icon]"></i>
            <p class="qtd">{{ qtd }}</p>
        </div>
    </div>
    
</template>

<script>

export default {
    name: 'CardsComponent',
    props: {
        type: String, 
        percentagem: String,
        icon: String,
        qtd: Number,
    }


}

</script>

<style lang="scss" scoped>
@import '@/assets/scss/_main';

    .my_cards {
        display: flex;
        flex-direction: column; 
        width: 100%; 
        background-color: $purple;
        padding: 15px;
        border-radius: 7px;
        color: #FFF;
        margin-top: 5px;
        
        .content {
            display: flex;
            justify-content: space-between;

        }

        .top {
            
            .percentagem {
                color: $green;
            }
            
        }

        .footer {

            .ico {
                font-size: 40px;
            }

            .qtd {
                font-size: 25px;
                margin: 0;
            }
            
        }

        
    }

</style>
