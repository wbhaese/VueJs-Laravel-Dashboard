<template>
    <div class="my_cards">
        <div class="top content">
            <h3>Cliente</h3>
            <p class="percentagem"><i class="fa fa-arrow-up"></i> 7%</p>
        </div>

        <div class="footer content">
            <i class="fa fa-users"></i>
            <p class="qtd">9570</p>
        </div>
    </div>
    
</template>

<script>

</script>

<style lang="scss" scoped>
@import '@/assets/scss/_main';

    .my_cards {
        display: flex;
        flex-direction: column; 
        width: 300px; 
        background-color: $purple;
        padding: 15px;
        border-radius: 7px;
        color: #FFF;
        
        .content {
            display: flex;
            justify-content: space-between;

        }

        .top {
            
        }

        .footer {
            
        }

        
    }

</style>
